<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $allTodo = Todo::all();
        return view('panel.todo.index', ['allTodo' => $allTodo]);
    }
}
