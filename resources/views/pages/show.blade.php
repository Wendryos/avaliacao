@extends('layouts.app')

@push('styles')
    
     <style>

         
        *          { margin: 0; padding: 0;     }
        body, html { width: 100%; height: 100%; }
        body, li, a, input, button, textarea, div, p { font-family: 'Poppins', sans-serif; }
        li   { list-style-type: none;         }
        a    { text-decoration: none;         }
        body { background: rgb(34, 31, 31); color: #fff; }

        .__ContainerPost__ {
   
            background-image: linear-gradient(to right, #fd746c 0%, #ff9068  51%, #fd746c  100%);
            transition: 0.5s;
            background-size: 200% auto;
            padding: 20px;          
            border-radius: 5px;
            cursor: default;
            box-shadow: 0 5px 0 #cf1208, 0 0 25px rgba(0,0,0,0.8);
            position: absolute;
            left: 50%; top: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        .__ContainerPost__:hover {
            background-position: right center; /* change the direction of the change here */

          }




        @media only screen and ( min-width: 1100px )     {      .__ContainerPost__ { width: 75%; height: 60%; }   }
        @media only screen and ( min-width: 800px ) and ( max-width: 1100px ) {      .__ContainerPost__ { width: 75%; height: 60%;  }  }
        @media only screen and ( min-width: 600px ) and  ( max-width: 800px ) {      .__ContainerPost__ { width: 75%; height: 65%;  }  } 
        @media only screen and ( min-width: 400px ) and  ( max-width: 600px ) {      .__ContainerPost__ { width: 80%; height: 75%;  }  }
        @media only screen and ( min-width: 200px ) and  ( max-width: 400px ) {      .__ContainerPost__ { width: 90%; height: 80%;  }  }
        @media only screen and ( min-width: 000px ) and  ( max-width: 200px ) {      .__ContainerPost__ { width: 95%; height: 95%;  }  }




        .__PostHead__ { 
            display: inline-flex; width: 100%;
            margin-bottom: 45px;     
            border-bottom: 1px solid rgba(0,0,0,0.2);
            padding: 0;
            padding-top:    0;
            padding-bottom: 10px;
        }

        .__IconPost__ { 
            width: 58px; height: 52px;
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

        .__TitlePost__ {  
            position: relative; 
            left: 0px; 
            width: calc(100% - 75px); 
            text-align: center; 
            font-size: 20px;
            text-shadow: 0 0 5px rgba(0,0,0,0.6);   
            font-weight: bold;
            margin-top: 5px;
        }

        .__IdentPost__        { 
            position: relative; 
            text-shadow: 0 0 5px #000;  
            margin-left: 15px;
            width: 48px;
            height: 24px;
            }
   
        .__PostContent__ {
            font-size: 16px;
            text-shadow: 0 0 5px rgba(0,0,0,0.6);   
            font-weight: 500;
            max-width: 85%;
            margin: 0 auto;
            text-align: justify;
        }

        .__PostFooter__    { 
            display: flex; 
         justify-content: center;
         align-items: center;
         margin-top: 75px;
         }

        .__PostFooter__ a  { 
            background: rgb(141, 141, 141); 
            color: #fff; 
            font-weight: bold; 
            padding: 15px; 
            box-shadow: 0 5px 0px rgb(45, 46, 45), inset 0 0 25px rgba(61, 61, 61, 0.5); 
            text-shadow: 0 0 5px rgba(0,0,0,0.7);
            border-radius: 4px; 

            }
            .__PostFooter__ i { position: relative; top: 1px; left: 1px; font-size: 16px; }


        .__PostFooter__ a:hover, .__footer a:focus { 
            position: relative;
            top: 3px;
            box-shadow: 0 1px 0px rgb(2, 73, 26), inset 0 0 25px rgba(26, 26, 27, 0.3); 
        }




    </style>

@endpush

@section('content')
    
    @isset($error)
        
        <h1> {{ $error }} </h1>
        <a href="{{ route('posts.index') }}"> <i class="fas fa-arrow-left"></i> Retornar </a>

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
            <a href="{{ route('posts.index') }}"> <i class="fas fa-arrow-left"></i> Retornar  </a>
        </div>

    </div>
    @endisset 

@endsection