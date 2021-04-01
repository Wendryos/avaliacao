@extends('layouts.app')



@section('content')
    
    @isset($error)
        
        <h1> {{ $error }} </h1>
        <a href="{{ route('posts.index') }}"> ?Popoti? </a>

    @else
    
        {{ $item['userId'] }}
        {{ $item['id'] }}
    
        {{ $item['title'] }}
        {{ $item['body'] }}
    @endisset

@endsection