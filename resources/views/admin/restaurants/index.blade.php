@extends('admin.templates.main')
@section('title','Restaurantes')
@section('content-fieldset')

	<table class="striped">
	<caption><h2 class="blue-text text-darken-1">Restaurantes</h2></caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Abierto</th>
				<th>Horario</th>
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