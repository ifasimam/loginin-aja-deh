@extends('template')

@section('main')
    <div id="homepage">
        <h2>Welcome !</h2>
        <p>Your Application's Landing Page.<br><br>
        Role Admin : Can add, edit and delete user.<br>
        Role Operator : Nothing Just Login.</p>
    </div>
@stop

@section('footer')
    @include('footer')
@stop
