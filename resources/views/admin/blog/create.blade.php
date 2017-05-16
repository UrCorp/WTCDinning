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

<h4 class="center blue-text text-darken-1">Crear nueva Entrada</h4>
	{!! Form::open(['method' => 'POST'],['class' => 'col s12']) !!}
	<div class="row center" style="width: 40%">
		<div class="input-field center">
			{!! Form::label('title', 'Título') !!}
			{!! Form::text('title',null,['class' => 'validate',  'required' => 'required']) !!}
		</div>
	</div>	

	<div class="row center" style="width: 40%">
		<div class="input-field center">
			{!! Form::label('resume', 'Resumen') !!}
			{!! Form::text('resume',null,['class' => 'validate',  'required' => 'required']) !!}
		</div>
	</div>	

	<div class="row center" style="width: 40%">
		<div class="input-field center">
			{!! Form::label('content', 'Texto') !!}
			{!! Form::text('content',null,['class' => 'validate',  'required' => 'required']) !!}
		</div>
	</div>	

	<div class="row center">
		<div class="input-field col s12 center">
			{!! Form::submit('Registrar',['class' => 'btn validate']) !!}
		</div>
	</div>

	{!! Form::close() !!}
@endsection