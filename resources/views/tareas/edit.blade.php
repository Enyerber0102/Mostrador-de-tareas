@extends('layout')

@section('title', 'Editar Tarea')

@section('content')
	<h1>Editar una tarea</h1>

@if($errors->any())
   <ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
   </ul>
@endif


	<form method="POST" action="{{ route('tareas.update', $tareas) }}">
		@csrf @method('PATCH')

		<label>
	   		Titulo de la Tarea <br>
            <input type="text" name="title" value="{{ $tareas->title }}">
       </label>
       <br>

       <label>
	   		Descripcion de la Tarea <br>
            <textarea name="description" value="{{ $tareas->description }}"></textarea>
       </label>
       <br>

       <button>Editar</button>
	</form>
@endsection
