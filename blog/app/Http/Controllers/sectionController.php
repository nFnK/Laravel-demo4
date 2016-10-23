<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class sectionController extends Controller
{
    public function home()
    {
        return view('Welcome') ;
    }
    public function library()
    {
        $Images = DB::table('books')->get() ;
        return view('Library',compact('Images'));
    }
    public function search(Request $request , $id){
        $res = $request->input('search') ;
        if ($res == ''){
            $page = 'library/profile/';
            $page .= $id ;
            return redirect($page) ;
        }
        $ret = array() ;
        $data = DB::table('UserInfo')->where('id',$id)->value('username') ;
        $Images = DB::table('userdata')->where('id',$id)->get() ;
        if ($data == ''){
            return view('Error') ;
        }
        else{
            function dosub($one,$two){
                for ($i = 0 ; $i < strlen($one) ; $i++){
                    for ($j = $i ; $j <strlen($one) ; $j++ ){
                        $temp = '' ;
                        for ($k = $i ; $k <= $j ; $k++){
                            $temp.=$one[$k] ;
                        }
                        if ($temp == $one[0] && $two == $temp){
                            return true ;
                        }
                        else if ($two == $temp && strlen($temp) > 1 ){
                            return true ;
                        }
                    }
                }
                return false ;
            }
            $check = 0 ;
            foreach ($Images as $i) {
                $str = strtolower($i->book_name) ;
                $str = str_replace(' ', '', $str);
                $res = strtolower($res) ;
                $res = str_replace(' ', '', $res);
                if (dosub($str, $res)){
                    $check = 1 ;
                    array_push($ret,$i);
                }
            }
            if ($check) return view('search',compact('id','data','ret')) ;
            else {
              return view('searcherror',compact('id','data')) ;
            }
        }
    }
    public function signup(){
        return view('SignUp') ;
    }
    public function usersignup(Request $request)
    {
        $email = $request->input('email') ;
        $username = $request->input('username') ;
        $password = $request->input('password') ;
        $confirm = $request->input('confirm') ;
        $data = DB::table('UserInfo')->get() ;
        $check = 0 ;
        foreach ($data as $key) {
            if (strcmp($email,$key->email) == 0){
                $check = 1 ;
                break ;
            }

        }
        if ($check){
            echo" <script> alert('Email address exists'); window.location.href = '/library/signup'; </script> " ;
        }
        else if (strcmp($password,$confirm) != 0 ){
         echo " <script> alert('Password doesnt match'); window.location.href = '/library/signup'; </script> " ;
        }
        else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo" <script> alert('Invalid email address'); window.location.href = '/library/signup'; </script> " ;
        }
        else {
            DB::table('UserInfo')->insert(['email' => $email,'username' => $username ,'password' => $password]) ;
            $data1 = DB::table('UserInfo')->get() ;
            $id = -1 ;
            foreach ($data1 as $key) {
                $id = $key->id ;
            }
            $page = 'library/profile/';
            $page .= $id ;
            return redirect($page) ;
        }
    }

    public function userprofile($id){
        $Images = DB::table('books')->get() ;
        $data = DB::table('UserInfo')->where('id',$id)->value('username') ;
        if ($data == ''){
            return view('Error') ;
        }
        else return view('UserProfile',compact('Images','data','id'));
    }
    public function upload($id){
        $data = DB::table('UserInfo')->where('id',$id)->value('username') ;
        if ($data == ''){
            return view('Error') ;
        }
        else return view('upload',compact('data','id')) ;
    }
    public function uploadcheck(Request $request,$id){
        $book_url = $request->input('url') ;
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $destinationPath = 'images' ;
        $file->move($destinationPath,$filename) ;
        $bookname = $request->input('bookname') ;
        $data = DB::table('UserInfo')->where('id',$id)->value('username') ;
        if ($data == ''){
            return view('Error') ;
        }
        else {
          DB::table('userdata')->insert(['id' => $id ,'image_path' => $filename,'book_url' => $book_url,'book_name' => $bookname ]) ;
          return redirect('library/profile/'.$id.'/upload') ;
        }
    }
    public function signout(){
        session_start();
        session_unset();
        session_destroy();
        header("location:/library");
        exit();
    }

    public function signin(){
        return view('SignIn') ;
    }

    public function mybooks($id){
        $data = DB::table('UserInfo')->where('id',$id)->value('username') ;
        $Images = DB::table('userdata')->where('id',$id)->get() ;
        if ($data == ''){
            return view('Error') ;
        }
        else return view('MyBooks',compact('id','data','Images')) ;
    }

    public function delete($id,Request $request){
        $autoid = $request->input('autoid') ;
        DB::table('userdata')->where('Auto_ID',$autoid)->delete() ;
        return redirect('library/profile/'.$id.'/mybooks') ;
    }

    public function update($id,Request $request){
        $autoid = $request->input('autoid') ;
        $data = DB::table('UserInfo')->where('id',$id)->value('username') ;
        if ($data == ''){
            return view('Error') ;
        }
        else return view('Update',compact('data','id','autoid')) ;
    }

    public function doupdate($id,Request $request){
        $autoid = $request->input('autoid') ;
        $book_url = $request->input('url') ;
        $file = $request->file('image');
        if ($file != NULL )$filename = $file->getClientOriginalName();
        else $filename ='' ;
        $destinationPath = 'images' ;
        if ($filename != '') $file->move($destinationPath,$filename) ;
        $bookname = $request->input('bookname') ;
        $data = DB::table('UserInfo')->where('id',$id)->value('username') ;
        if ($data == ''){
            return view('Error') ;
        }
        else {
            if ($filename != ''){
            DB::table('userdata')->where('Auto_ID',$autoid)->update(['image_path' => $filename]);
            }
            else if ($book_url != ''){
            DB::table('userdata')->where('Auto_ID',$autoid)->update(['book_url' => $book_url]);
            }
            else if ($bookname != ''){
            DB::table('userdata')->where('Auto_ID',$autoid)->update(['book_name' => $bookname]) ;
            }
            return redirect('library/profile/'.$id.'/mybooks') ;
        }
    }

    public function usersignin(Request $request){
        $email = $request->input('email') ;
        $password = $request->input('password') ;
        $data = DB::table('UserInfo')->get() ;
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo" <script> alert('Invalid email address'); window.location.href = '/library/signin'; </script> " ;
        }
        $id = -1 ;
        foreach ($data as $key) {
            if ($key->email == $email && $key->password == $password){
                $id = $key->id ;
                break ;
            }
        }
        if ($id == -1){
           echo" <script> alert('Wrong email or password'); window.location.href = '/library/signin'; </script> " ;
        }
        else {
            $page = 'library/profile/';
            $page .= $id ;
            return redirect($page) ;
        }
    }

}
