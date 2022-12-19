<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>



        <title>How To Use Font Awesome In Laravel? - codesolutionstuff.com</title>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="{{ mix('assets/css/theme.css') }}">
    <style type="text/css">
        i{
            font-size: 50px !important;
            padding: 10px;
        }
    </style>



        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion Des Dossiers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 

        <!-- Styles -->
       
        
        <link href="{{asset('assets/css/theme.css')}}"rel="stylesheet" type="text/css"> 
        

        
    </head>
    <body>
  
        <div id="intro" class="bg-image " style="background-image: url('images/background.jpg'); height:100vh; ">
           
                       
                    

             <div class="d-flex align-items-center justify-content-center text-center h-100">
                <div class="text-black">
                        
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/reclamation') }}">reclamation</a>
                                @else
                                   

                                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg m-2">Login</a>
                                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg m-2">Register</a>
                                @endauth
                            </div>
                        @endif
            
                        <div class="content">
                            <div class="title m-b-md">
                                <h1> Bienvenue Au Portail MFAR </h1>
                            </div>
            
                            <div class="links">
                                <a href="https://laravel.com/docs">Documentation</a>
                                <a href="https://laracasts.com">Laracasts</a>
                                <a href="https://laravel-news.com">News</a>
                                <a href="https://forge.laravel.com">Forge</a>
                                <a href="https://github.com/laravel/laravel">GitHub</a>
                            </div>
                        </div>
                    
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
                        <script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
                        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
                        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"> </script> 
                      
            
                </div>
            </div>
       
     </div>   



     <h1>How To Use Font Awesome In Laravel 9? - codesolutionstuff.com</h1>
   <i class="text-green-500 fa fa-copy"></i>
   <i class="fa fa-save"></i>
   <i class="fa fa-trash"></i>
   <i class="fa fa-home"></i>
 
    </body>
</html>

        
           
        

   