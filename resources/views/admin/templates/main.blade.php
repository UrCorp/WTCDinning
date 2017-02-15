<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title','Admin') | Panel de control</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('plugins/materialize/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('plugins/materialize/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    .card-img{
      background-color: black;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
  </style>
</head>
<body>
	@include('admin.templates.nav')
	<br><br>
	<br><br>
	<div class="conteiner">
		<section style="width: 90%;margin:auto">
	@if(Session::has('flash_message'))
	    <div class="chip green white-text">{!! session('flash_message') !!}<i class="close material-icons">close</i></div>
	@endif
		<fieldset class="col s6" style="">
			@yield('content-fieldset')
		</fieldset>
	</section>
	</div>
	

</body>

<!--  Scripts-->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/materialize/js/materialize.js') }}"></script>
  <script src="{{ asset('plugins/materialize/js/init.js') }}"></script>
</html>