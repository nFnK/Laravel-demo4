@extends('UserHeader')
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mycss.css')}}">
</head>
<body>
@section('lol')
<div class="testbox">
  <h1>Edit</h1>
  <form action="/library/profile/{{$id}}/mybooks/update" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="autoid" value="{{$autoid}}">
  <hr> 
   <label id="icon" for="name"><i class="icon-file"></i></label>
   <input type="text" name="url" placeholder="Amazon Url">
   <label id="icon" for="name"><i class="icon-file"></i></label>
   <input type="text" name="bookname" placeholder="Book Name">
   <br>
    <input type="file" name="image"><br> 
    <input type="submit" value="Update">
  </form>
  <br>
  <br>
</div>
@stop
</body>
</html>
