@extends('UserHeader')
<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mycss.css')}}">
</head>
<body>
@section('lol')
<div class="testbox">
  <h1>Upload</h1>
  <form action="/library/profile/{{$id}}/upload" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
  <hr> 
   <label id="icon" for="name"><i class="icon-file"></i></label>
   <input type="text" name="url" placeholder="Amazon Url" required>
   <label id="icon" for="name"><i class="icon-file"></i></label>
   <input type="text" name="bookname" placeholder="Book Name" required>
   <br>
    <input type="file" name="image" required><br> 
    <input type="submit" value="Upload">
  </form>
  <br>
  <br>
</div>
@stop
</body>
</html>
