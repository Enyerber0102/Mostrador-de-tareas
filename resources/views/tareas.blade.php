@extends('layout')

@section('title', 'Tareas')

@section('content')

	<h1>Estas en tareas</h1>
	 <a href="{{ route('tareas.create') }}">Crear nueva tarea</a>

<ul>
	@if($tareas)
		@forelse ($tareas as $tareasItem)

			<li><label><input type="checkbox" name="category[]" value="OOO"></label>

				{{ $tareasItem->title }}

			<a href="{{ route('tareas.edit', $tareasItem )}}">Editar</a><br>

			<form method="POST" action="{{ route('tareas.destroy', $tareas) }}">
			@csrf

			<button type="submit">Borrar</button>
			</form>

			<small>{{ $tareasItem->description }}</small></li>

		@empty

			<li>Por los momentos no hay tareas para mostrar</li>

		@endforelse
	@endif
</ul>

@endsection