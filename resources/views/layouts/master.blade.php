<!<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Dossier Des Adherents</title>
</head>
<link rel="stylesheet"  href="{{asset('assets/css/theme.css')}}">
<body>
	<div id="app">

 @include('profile.partials.menu')
@yield('content')

</div>

<script src="{{asset('assets/js/theme.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.7.13/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"> </script> 
@yield('javascripts')


</body>


</html>>
