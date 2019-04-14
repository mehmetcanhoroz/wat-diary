<?php

namespace App\Http\Controllers;

use App\Models\Income;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::all();
        return view('panel.income.index', ['incomes' => $incomes]);
    }
}
