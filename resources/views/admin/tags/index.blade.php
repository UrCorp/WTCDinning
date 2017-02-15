@extends('admin.templates.main')
@section('title','Restaurantes')
@section('content-fieldset')

	<!-- Buscador de Tags -->
	<nav>
	<div class="nav-wrapper rigth">
		{!! Form::open(['route(' =>'admin.tags.index]', 'method' => 'GET']) !!}
			<div class="input-field col s6 rigth">
				<input id="search" type="search" placeholder="Busca..." name="search" required>
	          	<label class="label-icon" for="search"><i class="material-icons">search</i></label>
	          	<i class="material-icons">close</i>
			</div>
		{!! Form::close() !!}
	</div>
	</nav>
	<!-- Fin del buscador -->

	<table class="striped">
	<caption><h2 class="blue-text text-darken-1">Etiquetas</h2></caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			<tr>
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->name }}</td>
				<td>
					<a href="{{ route('tags.edit', $tag->id) }}" class="btn orange lighten-2"><i class="material-icons">mode_edit</i></a>
					<a href="{{ route('tags.destroy', $tag->id) }}" class="btn red lighten-1"><i class="material-icons">delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $tags->render() !!}
</script>
@endsection