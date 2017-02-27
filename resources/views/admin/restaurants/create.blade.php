@extends('admin.templates.main')
@section('css')

@endsection
@section('title','Crear')

@section('content-fieldset')

@if(count($errors)>0)

	@foreach($errors->all() as $error)
		<div class="chip red darken-4 white-text">	
			{{ $error }}
			<i class="close material-icons">close</i>
		</div>
	@endforeach	
	
@endif

<h3 class="center blue-text text-darken-1">Crear nuevo Restaurante</h3>
	{{ Form::open(array('route' => 'restaurants.store', 'files' => true, 'method' => 'POST')) }}
	<div class="row">
		<div class="input-field col s6">
			{!! Form::label('name', 'Nombre del Restaurante') !!}
			{!! Form::text('name',null,['class' => 'validate',  'required' => 'required']) !!}
		</div>
		<div class="input-field col s6">
			{!! Form::label('adress', 'Dirección') !!}
			{!! Form::text('adress',null,['class' => 'validate',  'required']) !!}
		</div>
	</div>
	
	<div class="row">
		<div class="input-field col s3">
			{!! Form::label('email', 'Correo electrónico') !!}
			{!! Form::email('email',null,['class' => 'form-control validate', 'required']) !!}
		</div>
		<div class="input-field col s3">
			{!! Form::label('phone', 'Teléfono') !!}
			{!! Form::text('phone',null,['class' => 'validate',  'required']) !!}
		</div>
		<div class="input-field col s6">
			{!! Form::label('link_maps', 'Link en Google Maps') !!}
			{!! Form::text('link_maps', null, ['required' => 'required'])!!}
		</div>
	</div>

	<div class="row">
		<div class="inline col s3">
			{!! Form::label('start_day', 'Día de Inicio') !!}
			{!! Form::select('start_day', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo'], null,['class' => 'validate']) !!}	
		</div>
		
		<div class="inline col s3">
			{!! Form::label('finish_day', 'Día de Inicio') !!}
			{!! Form::select('finish_day', ['Lunes' => 'Lunes', 'Martes' => 'Martes', 'Miércoles' => 'Miércoles', 'Jueves' => 'Jueves', 'Viernes' => 'Viernes', 'Sábado' => 'Sábado', 'Domingo' => 'Domingo'], null,['class' => 'validate']) !!}	
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
			{!! Form::textarea('description', null, ['class' => 'materialize-textarea']) !!}
		</div>
	</div>

	<div class="row">

		<div class="file-field input-field col s3">
			<div class="btn">
				<span>Imagen</span>
				{!! Form::file('image') !!}
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text" placeholder="Elige una imagen.">
			</div>
		</div>

		<div class="inline col s3">
			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, ['class' => 'validate']) !!}	
		</div>

		<div class="input-field col s3">
			<select multiple name="tags[]">
				<option value="" disabled selected>Elige una o varias etiquetas</option>
				@foreach($tags as $tag)
				<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				@endforeach
			</select>
			<label>Etiquetas</label>
		</div>

	</div>

	<div class="row">
		<div class="col s12 center">
			{!! Form::submit('Registrar',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
		</div>
	</div>
	

	{!! Form::close() !!}
@endsection
