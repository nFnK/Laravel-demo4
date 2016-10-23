@extends('UserHeader')
<!DOCTYPE html>
<html>
<head>
</head>
<body>
@section('lol')
<div class="container" style="opacity:0.9">
    <div class="row">
        @foreach($Images as $i)
        <div class="col-md-3">
            <div class="thumbnail" style="height:375px;">
            <img src="/images/{{$i->image_path}}" style="width:250px;height:300px;">
            <h1><a class="btn btn-primary" href="{{$i->book_url}}" target="_blank">Amazon</a>
            <form action="/library/profile/{{$id}}/mybooks/update" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="autoid" value="{{$i->Auto_ID}}">
            <button class="btn btn-primary" type = "submit" style="margin-left:125px;margin-top:-80px;background-color:grey;">Edit</button>
            </form>
            <form action="/library/profile/{{$id}}/mybooks" method="POST">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="autoid" value="{{$i->Auto_ID}}">
            <button class="btn btn-primary" type = "submit" style="margin-left:185px;margin-top:-160px;background-color:grey;">Delete</button>
            </form>
            </h1>
        </div>
        </div>
          @endforeach
    </div>
</div>
@stop
</body>
</html>
