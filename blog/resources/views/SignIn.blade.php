@extends('master')
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mycss.css')}}">
</head>
<body>
@section('header&footer')
<div class="testbox">
  <h1>Sign In</h1>
  <form action="/library/signin" method="POST">
    {!! csrf_field() !!}
  <hr>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" placeholder="Email" required/> 
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" placeholder="Password" required/>
   <input type="submit" value="Sign In">
  <br><br><br>
</div>
</script>
@stop
</body>
</html>
