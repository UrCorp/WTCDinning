@extends('admin.templates.main')
@section('css')

@endsection
@section('title','Editar')

@section('content-fieldset')
<h3 class="center blue-text text-darken-1">Editar {{ $category->name }}</h3>
	{!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT'],['class' => 'col s12']) !!}
	<div class="row" style="width: 40%">
		<div class="input-field col s12">
			{!! Form::label('name', 'Nombre de la Categoría') !!}
			{!! Form::text('name', $category->name,['class' => 'validate',  'required' => 'required']) !!}
		</div>
	</div>

	<div class="row">
		<div class="col s12 center">
			{!! Form::submit('Actualizar',['class' => 'btn blue darken-1', 'style' => 'margin: auto']) !!}
		</div>
	</div>
	

	{!! Form::close() !!}
@endsection
