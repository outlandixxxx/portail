@extends('layouts.master')

@section('content')




      


    <div id="intro" class="bg-image shadow-2-strong" style="background-image: url('images/home.jpg'); height:50vh;">
        <div class="mask" style="background-color: rgba(23, 143, 107, 0.541);">
          <div class="container d-flex align-items-center justify-content-center text-center h-100">
            <div class="text-white">
              <h1 class="mb-1">BIENVENUE AU PORTAIL MFAR</h1>
             
            </div>
          </div>
        </div>
      </div>



              
           






        

      





@endsection

@section('javascripts')

<script src="js/vue.js"></script>
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
<script>
    var app=new Vue({
        el: '#app',
        data:{
            message:'je suis badr saoud'
        }
    });

</script>

@endsection
