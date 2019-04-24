<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allTodo = Todo::all();
        return view('panel.todo.index', ['allTodo' => $allTodo]);
    }
}
