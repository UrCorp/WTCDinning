<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <title>World Trade Center</title>

	  <!-- CSS  -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" async>
	  <link href="{{ asset('css/w3.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('plugins/materialize/css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('plugins/materialize/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('css/home.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<style media="screen">
		/* fallback */
			@font-face {
			font-family: 'Material Icons';
			font-style: normal;
			font-weight: 400;
			src: url(https://fonts.gstatic.com/s/materialicons/v29/2fcrYFNaTjcS6g4U3t-Y5UEw0lE80llgEseQY3FEmqw.woff2) format('woff2');
			}

			.material-icons {
			font-family: 'Material Icons';
			font-weight: normal;
			font-style: normal;
			font-size: 24px;
			line-height: 1;
			letter-spacing: normal;
			text-transform: none;
			display: inline-block;
			white-space: nowrap;
			word-wrap: normal;
			direction: ltr;
			text-rendering: optimizeLegibility;
			-webkit-font-smoothing: antialiased;
			}
		</style>
		<style media="screen">
			.modalgp { width: 95% !important ; height: 95% !important ; }
		</style>
	</head>
	<body>

		@include('site.templates.nav')

		@yield('body-content')


		<!-- Popup for Sales Information -->
		<!-- Large -->
		<div style="position: fixed; z-index: 10; bottom: 0;width: 100%; margin-bottom: -18px;z-index: 100000000000000000000;" class="hide-on-med-and-down" id="prueba">
		   <ul id="general" class="collapsible w3-right" data-collapsible="accordion">
		    <li id="informes">
		      <div class="collapsible-header white-text" style="background-color: #ECA154"><i class="material-icons">aspect_ratio</i>Real Estate Sales</div>
		      <div class="collapsible-body white">
		        {!! Form::open(['route' => 'site.contact.sales', 'id' => 'form-contact', 'method' => 'POST']) !!}
		          <div class="form-group">
		            {!! Form::label('sales[name]', 'Name *') !!}
		            {!! Form::text('sales[name]', null, ['class' => 'validate form-control', 'maxlength' => 60, 'required' => 'required']) !!}
		          </div>
		          <div class="form-group">
		            {!! Form::label('sales[email]', 'eMail *') !!}
		            {!! Form::email('sales[email]', null, ['class' => 'form-control', 'maxlength' => 250, 'required' => 'required']) !!}
		          </div>
		          <div class="form-group">
		            {!! Form::label('sales[phone]', 'Phone *') !!}
		            {!! Form::text('sales[phone]', null, ['class' => 'form-control', 'pattern' => '^[0-9]{10,10}$', 'required' => 'required']) !!}
		          </div>
							<div class="form-group">
		            {!! Form::label('sales[message]', 'Message *') !!}
		            {!! Form::text('sales[message]', null, ['class' => 'form-control', 'maxlength' => 60, 'required' => 'required']) !!}
		          </div>
		          <div style="width: 100;">
		            <button class="w3-btn" style="color: white; background-color: #ECA154; margin: auto">
		              ENVIAR
		            </button>
		          </div>
		        {!! Form::close() !!}
					</div>
		    </li>
		  </ul>
		</div>
		<!-- Responsive -->
		<div style="position: fixed; z-index: 10; bottom: 0; width: 100%; margin-bottom: -18px; z-index: 1000" class="hide-on-large-only" id="prueba1">
		   <ul id="general-movil" class="collapsible w3-right" data-collapsible="accordion">
		    <li id="informes-movil">
		      <div class="collapsible-header white-text" style="background-color: #ECA154"><i class="material-icons">aspect_ratio</i>Sales</div>
		      <div class="collapsible-body white">
		        {!! Form::open(['route' => 'site.contact.sales', 'id' => 'form-contact', 'method' => 'POST']) !!}
		          <div class="form-group">
		            {!! Form::label('sales[name]', 'Name *') !!}
		            {!! Form::text('sales[name]', null, ['class' => 'validate form-control', 'maxlength' => 60, 'required' => 'required']) !!}
		          </div>
		          <div class="form-group">
		            {!! Form::label('sales[email]', 'eMail *') !!}
		            {!! Form::email('sales[email]', null, ['class' => 'form-control', 'maxlength' => 250, 'required' => 'required']) !!}
		          </div>
		          <div class="form-group">
		            {!! Form::label('sales[phone]', 'Phone *') !!}
		            {!! Form::text('sales[phone]', null, ['class' => 'form-control', 'pattern' => '^[0-9]{10,10}$', 'required' => 'required']) !!}
		          </div>
							<div class="form-group">
		            {!! Form::label('sales[message]', 'Message *') !!}
		            {!! Form::text('sales[message]', null, ['class' => 'form-control', 'maxlength' => 60, 'required' => 'required']) !!}
		          </div>
		          <div style="width: 100;">
		            <button class="w3-btn" style="color: white; background-color: #ECA154; margin: auto">
		              ENVIAR
		            </button>
		          </div>
		        {!! Form::close() !!}
					</div>
		    </li>
		  </ul>
		</div>
		<!-- Popup -->


		@include('site.templates.footer')

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ asset('plugins/materialize/js/init.js') }}"></script>
		<script src="{{ asset('js/home.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByvtwqkD692H3-KFxtpZMwoFH5SlNAsqQ&callback=myMap"></script>


		<script>
		$(document).ready(function () {
		  $('.slider').slider({
		  	full_width: true,
		  	height: 700,
		  	indicators: true,
		  	interval: 10000
			});

			$('.next').click(function() {
			 $('.slider').slider('next');
			});
			$('.prev').click(function() {
			 $('.slider').slider('prev');
			});

			$('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .8, // Opacity of modal background
      inDuration: 500, // Transition in duration
      outDuration: 100, // Transition out duration
      startingTop: '0%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
    }
  );
    });
    </script>

	</body>
</html>
