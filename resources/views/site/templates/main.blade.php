<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <title>World Trade Center</title>

	  <!-- CSS  -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="{{ asset('css/w3.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('plugins/materialize/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('plugins/materialize/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>

		@include('site.templates.nav')

		@yield('body-content')


		<!-- Popup for Sales Information -->
		<!-- Large -->
		<div style="position: fixed; z-index: 10; bottom: 0;width: 100%; margin-bottom: -18px" class="hide-on-med-and-down" id="prueba">
		   <ul id="general" class="collapsible w3-right" data-collapsible="accordion" style="width: 250px;">
		    <li id="informes">
		      <div class="collapsible-header white-text" style="background-color: #ECA154"><i class="material-icons">aspect_ratio</i>Informes de Ventas</div>
		      <div class="collapsible-body white">
		        {!! Form::open(['route' => 'site.contact.send', 'id' => 'form-contact', 'method' => 'POST']) !!}
		            {!! Form::label('contact[name]', 'Nombre *') !!}
		            {!! Form::text('contact[name]', null, ['class' => '', 'maxlength' => 60, 'required' => 'required']) !!}
		            {!! Form::label('contact[email]', 'eMail *') !!}
		            {!! Form::email('contact[email]', null, ['class' => '', 'maxlength' => 250, 'required' => 'required']) !!}
		            {!! Form::label('contact[phone]', 'Teléfono') !!}
		            {!! Form::text('contact[phone]', null, ['class' => '', 'pattern' => '^[0-9]{10,10}$', 'required' => 'required']) !!}
		            {!! Form::label('contact[enterprise]', 'Empresa *') !!}
		            {!! Form::text('contact[enterprise]', null, ['class' => '', 'maxlength' => 60, 'required' => 'required']) !!}
		          <div style="width: 100;">
		            <button class="w3-btn" style="color: white; background-color: #ECA154; margin: auto">
		              ENVIAR
		            </button>
		          </div>
		        {!! Form::close() !!}
		    </li>
		  </ul>
		</div>
		<!-- Responsive -->
		<div style="position: fixed; z-index: 10; bottom: 0; width: 100%; margin-bottom: -18px; z-index: 1000" class="hide-on-large-only" id="prueba1">
		   <ul id="general-movil" class="collapsible w3-right" data-collapsible="accordion">
		    <li id="informes-movil">
		      <div class="collapsible-header white-text" style="background-color: #ECA154"><i class="material-icons">aspect_ratio</i>Informes de Ventas</div>
		      <div class="collapsible-body white">
		        {!! Form::open(['route' => 'site.contact.send', 'id' => 'form-contact', 'method' => 'POST']) !!}
		            {!! Form::label('contact[name]', 'Nombre *') !!}
		            {!! Form::text('contact[name]', null, ['class' => '', 'maxlength' => 60, 'required' => 'required']) !!}
		            {!! Form::label('contact[email]', 'eMail *') !!}
		            {!! Form::email('contact[email]', null, ['class' => '', 'maxlength' => 250, 'required' => 'required']) !!}
		            {!! Form::label('contact[phone]', 'Teléfono') !!}
		            {!! Form::text('contact[phone]', null, ['class' => '', 'pattern' => '^[0-9]{10,10}$', 'required' => 'required']) !!}
		            {!! Form::label('contact[enterprise]', 'Empresa *') !!}
		            {!! Form::text('contact[enterprise]', null, ['class' => '', 'maxlength' => 60, 'required' => 'required']) !!}
		          <div style="width: 100;">
		            <button class="w3-btn" style="color: white; background-color: #ECA154; margin: auto">
		              ENVIAR
		            </button>
		          </div>
		        {!! Form::close() !!}
		    </li>
		  </ul>
		</div>
		<!-- Popup -->


		@include('site.templates.footer')

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="{{ asset('plugins/materialize/js/materialize.js') }}"></script>
		<script src="{{ asset('plugins/materialize/js/init.js') }}"></script>
		<script src="{{ asset('js/home.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByvtwqkD692H3-KFxtpZMwoFH5SlNAsqQ&callback=myMap"></script>


		<script>
            $(document).ready(function () {
                $('.slider').slider({
                	full_width: true,
                	height: 400,
                	indicators: true,
                	interval: 10000
            	});

				$('.next').click(function() {
				 $('.slider').slider('next');
				});
				$('.prev').click(function() {
				 $('.slider').slider('prev');
				});
            });
        </script>

	</body>
</html>
