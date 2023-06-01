@extends('layout.app')

@section('content')
    <h1Thankyou {{$name}}</h1>
    <p>Your message "{{$message}}" has been submitted</p>
    <p>Submitted by your email address {{$email}}</p>

@endsection

@section('title')
    Contact Page
@endsection