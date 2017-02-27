@extends('admin.templates.main')
@section('title','Restaurantes')
@section('content-fieldset')
<!-- Buscador de Tags -->
	<nav>
	<div class="nav-wrapper white">
		{!! Form::open(['route(' =>'admin.restaurants.index]', 'method' => 'GET']) !!}
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
	<caption><h2 class="blue-text text-darken-1">Restaurantes</h2></caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Abierto</th>
				<th>Horario</th>
				<th>Categoría</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($restaurants as $restaurant)
			<tr>
				<td>{{ $restaurant->id }}</td>
				<td>{{ $restaurant->name }}</td>
				<td>{{ $restaurant->phone }}</td>
				<td>{{ $restaurant->start_day }} - {{ $restaurant->finish_day }}</td>
				<td>{{ $restaurant->open_hour }} - {{ $restaurant->close_hour }}</td>
				<td>{{ $restaurant->categoria->name }} </td>
				<td>
					<a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn orange lighten-2"><i class="material-icons">mode_edit</i></a>
					<a href="{{ route('restaurants.destroy', $restaurant->id) }}" class="btn red lighten-1"><i class="material-icons">delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $restaurants->render() !!}
</script>
@endsection