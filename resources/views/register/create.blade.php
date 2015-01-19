@extends('layouts.default')

@section('content')
<h1>Register Form</h1>

@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach


{!!Form::open(['route'=>'posts.store'])!!}
  <div>
    {!!Form::label('username', 'Username')!!}
    {!!Form::text('username')!!}
  </div>
  <div>
    {!!Form::label('body', 'Body')!!}
    {!!Form::textarea('body')!!}
  </div>
  <div>
    {!!Form::submit('Submit')!!}
  </div>
{!!Form::close()!!}
@stop
