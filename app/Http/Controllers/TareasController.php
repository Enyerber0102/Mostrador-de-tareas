<?php

namespace App\Http\Controllers;

use App\Models\Tareas;

use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

      {
        $tareas = Tareas::latest()->paginate();

        return view('tareas', compact('tareas'));

      }

    //public function show($id)
    //    {
    //        return view('tareas.show', [
    //        'tareas' => Tareas::find($id)

    //    ]);
    //}

    public function create()

    {
        return view('tareas.create');
    }

    public function store()

    {
        $fields = request()->validate([

         'title' => 'required',
         'description' => 'required',
    ]);

    Tareas::create($fields);

      return redirect()->route('tareas.index');

    }

public function edit(Tareas $tareas)
        {
            return view('tareas.edit', [
            'tareas' => $tareas

        ]);
    }

public function update(Tareas $tareas)
{
    $tareas->update([
        'title' => request('title'),
        'description' => request('description'),


    ]);

    return redirect()->route('tareas.index', $tareas);

}

public function destroy(Tareas $tareas)
{

        var_dump($tareas);

        //$tareas->delete();

        //return redirect()->route('tareas.index');
}

}

