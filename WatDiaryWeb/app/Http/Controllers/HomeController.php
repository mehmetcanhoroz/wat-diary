<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $counts = collect(DB::select('SELECT (select count(*) FROM incomes) as income_count, (select count(*) FROM notes) as note_count, (select count(*) FROM todos) as todo_count, (select count(*) FROM work_days) as work_day_count'))->first();
        return view('panel.index', ["counts" => $counts]);
    }
}
