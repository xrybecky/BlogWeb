@extends('app')

@section('title')
    BBB
@stop

@if(isset($_GET['admin']))
    ADMIN LOGIN - MODAL
@endif

@section('content')
    <div class="quote-container">
        <h2>{{$blog->_title}}</h2>
        <p class="text">{{$blog->_text}}</p>
    </div>
@stop