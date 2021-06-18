@extends('layout')

@section('title', 'Crear nueva tarea')

@section('content')
	<h1>Crear Nueva Tarea</h1>

@if($errors->any())
   <ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
   </ul>
@endif

	<form method="POST" action="{{ route('tareas.store') }}">
		@csrf


	   <label>
	   		Titulo de la Tarea <br>
            <input type="text" name="title">
       </label>
       <br>

       <label>
	   		Descripcion de la Tarea <br>
            <textarea name="description"></textarea>
       </label>
       <br>

       <button>Crear</button>
	</form>
@endsection
