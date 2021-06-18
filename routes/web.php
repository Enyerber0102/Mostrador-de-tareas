<?php

use App\Http\Controllers\TareasController;

Route::view('/', 'home')->name('home');

Route::get('/tareas', [TareasController::class,'index'])->name('tareas.index');

Route::get('/tareas/crear', [TareasController::class,'create'])->name('tareas.create');

Route::get('/tareas/{tareas}/editar', [TareasController::class,'edit'])->name('tareas.edit');

Route::patch('/tareas/{tareas}', [TareasController::class,'update'])->name('tareas.update');

Route::post('/tareas', [TareasController::class,'store'])->name('tareas.store');

Route::post('/tareas/{tareas}', [TareasController::class,'destroy'])->name('tareas.destroy');

Auth::routes();

