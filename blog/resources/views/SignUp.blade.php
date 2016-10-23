@extends('master')
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mycss.css')}}">
</head>
<body>
@section('header&footer')
<div class="testbox">
  <h1>Sign Up</h1>
  <form action="/library/signup" method="POST">
  {!! csrf_field() !!}
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Personal</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Company</label>
    </div>
  <hr>
  <label id="icon"><i class="icon-envelope "></i></label>
  <input type="text" name="email" placeholder="Email" required/>
  <label id="icon"><i class="icon-user"></i></label>
  <input type="text" name="username" placeholder="User Name" required/>
  <label id="icon"><i class="icon-shield"></i></label>
  <input type="password" name="password" placeholder="Password" required/>
  <label id="icon"><i class="icon-shield"></i></label>
  <input type="password" name="confirm" placeholder="Confirm Password" required/>
  <br> <br>
  <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   <input type="submit" value="Register">
  </form>
</div>
@stop
</body>
</html>
