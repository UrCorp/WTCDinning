@extends('admin.templates.main')
@section('title','Editar')

@section('content-fieldset')

<div class="row">
@foreach($images as $image)
<div class="col s2 m5">
<div class="card">
	<div class="card-image">
		<img src="../../public/img/restaurants/{{ $image->name }}">
		<span class="card-title">{{ $image->restaurants->name }}</span>
	</div>
</div>
</div>
@endforeach
</div>

@endsection
