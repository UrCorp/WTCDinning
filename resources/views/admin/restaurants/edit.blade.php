@extends('admin.templates.main')
@section('css')

@endsection
@section('title','Editar')

@section('content-fieldset')
<h3 class="center blue-text text-darken-1">Editar {{ $restaurant->name }}</h3>
	{!! Form::open(['route' => ['restaurants.update', $restaurant], 'method' => 'PUT'],['class' => 'col s12']) !!}
	<div class="row">
		<div class="input-field col s6">
			{!! Form::label('name', 'Nombre del Restaurante') !!}
			{!! Form::text('name', $restaurant->name,['class' => 'validate',  'required' => 'required']) !!}
		</div>
		<div class="input-field col s6">
			{!! Form::label('adress', 'Dirección') !!}
			{!! Form::text('adress',$restaurant->adress,['class' => 'validate',  'required']) !!}
		</div>
	</div>
	
	<div class="row">
		<div class="input-field col s3">
			{!! Form::label('email', 'Correo electrónico') !!}
			{!! Form::email('email',$restaurant->email,['class' => 'form-control validate', 'required']) !!}
		</div>
		<div class="input-field col s3">
			{!! Form::label('phone', 'Teléfono') !!}
			{!! Form::text('phone',$restaurant->phone,['class' => 'validate',  'required']) !!}
		</div>
		<div class="col s6 center">
			{!! Form::label('link_maps', 'Coordenadas') !!}
			{!! Form::text('link_maps', $restaurant->link_maps, ['required' => 'required', 'placeholder' => '20.600878, -100.379371'])!!}
		</div>
	</div>

	<div class="row">
		<div class="inline col s3">
			{!! Form::label('start_day', 'Día de Inicio') !!}
			{!! Form::select('start_day', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo'], $restaurant->start_day,['class' => 'validate']) !!}	
		</div>
		
		<div class="inline col s3">
			{!! Form::label('finish_day', 'Día de Inicio') !!}
			{!! Form::select('finish_day', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo'], $restaurant->finish_day,['class' => 'validate']) !!}	
		</div>

		<div class="col s1">
			<p style="text-align: right;">Abre:</p>
		</div>

		<div class="col s1">
			{!! Form::label('open_hour', 'Hora (24)') !!}
			{!! Form::number('open_hour', '12',['min' => 0,'max' => 23,'style' => 'text-align: right']) !!}
		</div>

		<div class="col s1">
			{!! Form::label('minute_open', 'Minuto') !!}
			{!! Form::number('minute_open', '00',['min' => 0,'max' => 59, 'step' => 30]) !!}
		</div>

		<div class="col s1">
			<p style="text-align: right;">Cierra:</p>
		</div>

		<div class="col s1">
			{!! Form::label('close_hour', 'Hora (24)') !!}
			{!! Form::number('close_hour', '12',['min' => 0,'max' => 23,'style' => 'text-align: right']) !!}
		</div>

		<div class="col s1">
			{!! Form::label('minute_close', 'Minuto') !!}
			{!! Form::number('minute_close', '00',['min' => 0,'max' => 59, 'step' => 30]) !!}
		</div>
	</div>

	<div class="row">

		<div class="col s6">
			{!! Form::label('description', 'Descripción') !!}
			{!! Form::textarea('description', $restaurant->description, ['class' => 'materialize-textarea']) !!}
		</div>

	</div>

	<div class="row">
		<div class="col s12 center">
			{!! Form::submit('Actualizar',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
		</div>
	</div>
	

	{!! Form::close() !!}
@endsection
