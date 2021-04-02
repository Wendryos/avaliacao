
@extends('layouts.app')

@push('styles')
    
     <style>

        * { margin: 0; padding: 0; }
        body, html { width: 100%; height: 100%; }
        body, li, a, input, button, textarea, div, p { font-family: 'Poppins', sans-serif; }
        li { list-style-type: none; }
        a  { text-decoration: none; }

        .__ContainerPagination__ {
            position: fixed;
            top:    calc(100% - 64px);
            height: 64px;
            width:  100%;
            display: flex;
            background: rgb(34, 31, 31);
            justify-content: center;
            justify-items:   center;
            align-content:   center;
            align-items:     center;
            padding-top: 17px;
            box-shadow: 0 -10px 10px rgba(0,0,0,0.05);

        }

.__ContainerPosts__ {
    height: calc(100% - 64px);
    width: 100%;
    position: fixed;
    overflow-y: auto;
    background: rgb(37, 37, 37);
}

.__ContainerPosts__ .__ObjectPost__ {
    
    background-image: linear-gradient(to right, #fd746c 0%, #ff9068  51%, #fd746c  100%);
    transition: 0.5s;
    background-size: 200% auto;
    color: rgb(255, 255, 255);
    padding: 20px;
    margin-bottom: 50px;
    margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 25px;
    border-radius: 5px;
    cursor: default;
    box-shadow: 0 5px 0 #cf1208, 0 0 25px rgba(0,0,0,0.5);
    
}


.__ContainerPosts__ .__ObjectPost__:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         


@media only screen and ( min-width: 1100px )     {    .__ContainerPosts__ .__ObjectPost__ { width: 60%; }   }
@media only screen and ( min-width: 800px ) and ( max-width: 1100px ) {    .__ContainerPosts__ .__ObjectPost__ { width: 75%;  }  }
@media only screen and ( min-width: 600px ) and  ( max-width: 800px ) {    .__ContainerPosts__ .__ObjectPost__ { width: 80%;  }  } 
@media only screen and ( min-width: 400px ) and  ( max-width: 600px ) {    .__ContainerPosts__ .__ObjectPost__ { width: 85%;  }  }
@media only screen and ( min-width: 200px ) and  ( max-width: 400px ) {    .__ContainerPosts__ .__ObjectPost__ { width: 95%;  }  }
@media only screen and ( min-width: 000px ) and  ( max-width: 200px ) {    .__ContainerPosts__ .__ObjectPost__ { width: 100%; }  }


.__ObjectPostHeader__ { 
    display: inline-flex;
    border-bottom: 1px solid rgba(0,0,0,0.2);
    width:  100%;
    height: auto;
    padding: 0;
    padding-top:    10px;
    padding-bottom: 10px;
    margin-bottom:  15px;
}


.__user { 
    width: 44px; height: 40px;
    font-weight: bold;
    background: rgb(0, 0, 0); 
    border-radius: 100%;
    display: flex;
    color: #fff;
    justify-content: center; 
    align-items: center;
    margin: 0;
    box-shadow: 0 0 30px rgba(0,0,0,0.5);
    text-shadow: 0 0 5px rgba(255, 255, 255, 1);
    margin-right: 15px;
}

.__title {  
position: relative; 
left: 0px; 
width: calc(100% - 75px); 
text-align: center; 
font-size: 18px;
text-shadow: 0 0 5px rgba(0,0,0,0.4);   
font-weight: bold;
}
.__id        { position: relative; text-shadow: 0 0 5px #000;  margin-left: 15px;}
.__content   { text-align: center; }
.__footer    { display: flex; justify-content: center; align-items: center; }
.__footer a  { 
    background: rgb(37, 219, 98); 
    color: #fff; 
    font-weight: bold; 
    padding: 10px; 
    box-shadow: 0 5px 0px rgb(2, 73, 26), inset 0 0 25px rgba(0,0,255,0.3); 
    text-shadow: 0 0 3px rgba(0,0,0,0.7);
    border-radius: 4px; 

    }
    .__footer i { position: relative; top: 1px; left: 1px; font-size: 16px; }


.__footer a:hover, .__footer a:focus { 
    position: relative;
    top: 3px;
    box-shadow: 0 1px 0px rgb(2, 73, 26), inset 0 0 25px rgba(0,0,255,0.3); 
}




.__ObjectPostContent__ { display: flex; justify-content: center; align-items: center;    padding-bottom: 15px; }




.pagination .page-link { 
    color: rgb(255, 60, 0)!important; 
    font-weight: bold; 
    border: 1px solid #d3d3d3!important; 
    outline: none!important;
    box-shadow:  none!important;
}

.pagination  .page-item.active .page-link { 
    background: rgb(255, 60, 0)!important; 
    color: #fff!important;
    font-weight: bold;  
    border: 1px solid #d3d3d3!important; 
    outline: none!important;
    box-shadow:  none!important;
 }


    </style>    


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

