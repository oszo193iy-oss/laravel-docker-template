<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
     public function create()
    {
            TODO:
        return view('todo.create');
    }

    public function index()
    {
         $todo = new Todo();
         $todos = $todo->all();
         return view('todo.index', ['todos' => $todos]);
    }

    public function store(Request $request) 
{
    $inputs = $request->all(); 
    dd($inputs);

    $todo = new Todo(); 
    $todo->fill($inputs);
    $todo->save();

    return redirect()->route('todo.index');
}
}