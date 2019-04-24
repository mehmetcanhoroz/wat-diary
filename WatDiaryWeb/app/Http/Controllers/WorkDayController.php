<?php

namespace App\Http\Controllers;

use App\Models\WorkDay;

class WorkDayController extends Controller
{
    public function index()
    {
        $workDays = WorkDay::all();
        return view('panel.work_day.index', ['workDays' => $workDays]);
    }
}
