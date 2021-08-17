@extends('layouts.login')

@section('content')

@endsection

{!! Form::open(['url' => 'profile']) !!}

{{ Form::label('UserName') }}
{{ Form::text('username',null,['class' => 'input', 'placeholder' => {{$username}}]) }}

{{ Form::label('MailAdress') }}
{{ Form::text('mail',null,['class' => 'input', 'placeholder' => {{$mail}}]) }}

{{ Form::label('PassWord') }}
{{ Form::text('password',null,['class' => 'input', 'placeholder' => {{$password}}]) }}

{{ Form::label('new Password') }}
{{ Form::text('newpassword',null,['class' => 'input', 'placeholder' => {{$newpassword}}]) }}

{{ Form::label('Bio') }}
{{ Form::text('bio',null,['class' => 'input', 'placeholder' => {{$bio}}]) }}

{{ Form::label('Icon Image') }}
{{ Form::text('image',null,['class' => 'input', 'placeholder' => {{$image}}]) }}

{{ Form::submit('更新') }}
