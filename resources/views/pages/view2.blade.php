@extends('layouts.app')

@push('styles')
     <link rel="stylesheet" href="{{ asset('css/view2.css') }}">
@endpush


@section('content')
    
    @isset($error)
     <div class="__ContainerPost__">
         <div class="__PostError__">
            <h1> {{ $error }} </h1>
          
                <div class="__PostFooter__">
                    <a href="{{ route('posts.index') }}"> 
                        <i class="fas fa-arrow-left"></i> Voltar  </a>
                </div>
        </div>
    </div>   


    @else
    <div class="__ContainerPost__">

         <div class="__PostHead__">
            <div class="__IconPost__">      {{ $item['userId'] }}     </div>
            <div class="__TitlePost__">     {{ $item['title']  }}     </div>
            <div class="__IdentPost__">   # {{ $item['id']     }}     </div>            
        </div>

         <div class="__PostContent__">
             <div class="__BodyPost__">   {{ $item['body']   }}     </div>
        </div>
        <div class="__PostFooter__">
            <a href="{{ route('posts.index') }}"> 
                <i class="fas fa-arrow-left"></i> Voltar  </a>
        </div>

    </div>
    @endisset 

@endsection