<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $counts = collect(DB::select('SELECT (select count(*) FROM incomes where user_id = ' . Auth::id() . ') as income_count, (select count(*) FROM notes where user_id = ' . Auth::id() . ') as note_count, (select count(*) FROM todos where user_id = ' . Auth::id() . ') as todo_count, (select count(*) FROM work_days where user_id = ' . Auth::id() . ') as work_day_count'))->first();
        return view('panel.index',
            [
                'counts' => $counts,
                //'todos' => Auth::user()->todos->sorted()->get(),
                'todos' => Auth::user()->todos()->sorted()->notCompleted()->limit(10)->get(),
                'notes' => Auth::user()->notes,
                'income' => Auth::user()->incomes,
                'workdays' => Auth::user()->workdays
            ]);
    }
}
