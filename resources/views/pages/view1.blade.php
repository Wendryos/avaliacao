
@extends('layouts.app')

@push('styles')
     <link rel="stylesheet" href="{{ asset('css/view1.css') }}">
@endpush



@section('content')
<div class="__ContainerPosts__">
    @foreach ($posts as $post)
        <ul class="__ObjectPost__"> 
            <div class="__ObjectPostHeader__">
                <li class="__user" title="Usuário: {{ $post['userId']     }}">  
                    {{ $post['userId']     }}     </li>           
                <li class="__title">                {{ $post['title']      }}     </li>
                <li class="__id">                  #{{ $post['id']         }}     </li>

            </div>

             <div class="__ObjectPostContent__">
                <li class="__content"> {{ $post['body']   }} </li>       
            </div>

             <div class="__ObjectPostFooter__">
                <li class="__footer"> <a href="{{ route('posts.show', $post['id']) }}"> Ver postagem <i class="fas fa-arrow-right"></i> </a> </li>       
            </div>


        </ul>
    @endforeach	
</div>


     <div class="__ContainerPagination__">
        {{ $posts->render() }}
    </div>

@endsection







@push('script')
    
    <script>
 $(document).ready(function(){    


    $('.__content').each(function() {
        var text     = $(this).html();
        var newHtml = text.substring(0, 72) + '...';
        $(this).html(newHtml);    

    });
   


 
});
    </script>

@endpush

