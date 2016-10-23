@extends('master')
<!DOCTYPE html>
<html>
<head>
</head>
<body>
@section('header&footer')
<div class="container" style="opacity:0.9">
    <div class="row">
        @foreach($Images as $i)
        <div class="col-md-3">
            <div class="thumbnail" style="height:375px;">
            <img src="/images/{{$i->id}}.jpg" style="width:250px;height:300px;">
            <h1><a class="btn btn-primary" href="{{$i->book_url}}" target="_blank"> Amazon</a>
            </h1>
        </div>
        </div>
          @endforeach
    </div>
</div>
@stop
</body>
</html>
