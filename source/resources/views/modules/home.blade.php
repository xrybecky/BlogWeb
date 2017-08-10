@extends('app')

@section('title')
    Home
@stop

@if(isset($_GET['admin']))
    ADMIN LOGIN - MODAL
@endif

@section('content')
    <div class="quote-container">
        <p class="text">{{$home->_text}}</p>
    </div>
    @each('grid.blog', $home->blogs, 'blog')
@stop