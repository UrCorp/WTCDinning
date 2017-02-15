@extends('admin.templates.main')
@section('title','Restaurantes')
@section('content-fieldset')

	<table class="striped">
	<caption><h2 class="blue-text text-darken-1">Categorías</h2></caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
			<tr>
				<td>{{ $category->id }}</td>
				<td>{{ $category->name }}</td>
				<td>
					<a href="{{ route('categories.edit', $category->id) }}" class="btn orange lighten-2"><i class="material-icons">mode_edit</i></a>
					<a href="{{ route('categories.destroy', $category->id) }}" class="btn red lighten-1"><i class="material-icons">delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}
</script>
@endsection