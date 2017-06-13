<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	  <title>World Trade Center</title>

	  <!-- CSS  -->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="{{ asset('plugins/materialize/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
	  <link href="{{ asset('plugins/materialize/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
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
            });
        </script>    

	</body>
</html>