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
	  <style type="text/css">
	  	.slider .indicators .indicator-item {
			height: 7px;
			width: 7px;
			background-color: #666666;
			/*border: 1px solid #ffffff;*/
			-webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
			-moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
		}
		.slider .indicators .indicator-item.active {
		  background-color: #ffffff;
		}
		.slider .indicators {
		  bottom: 60px;
		  z-index: 100;
		  /* text-align: left; */
		}

		a .btn-large{
			border: 1px solid #ffffff;
		}
	  </style>
	</head>
	<body>

		@include('site.templates.nav')

		@yield('body-content')


		@include('site.templates.footer')

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="{{ asset('plugins/materialize/js/materialize.js') }}"></script>
		<script src="{{ asset('plugins/materialize/js/init.js') }}"></script>

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