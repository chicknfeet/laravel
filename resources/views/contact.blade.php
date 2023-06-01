@extends('layout.app')

@section('content')
    <h1>Welcome to Contact Page</h1>

    <form action="{{route(contact.submit)}}" method="get">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="message">Message</label>
            <input type="text" name="message" id="message">
        </div>
    </form>
@endsection

@section('title')
    Contact Page
@endsection