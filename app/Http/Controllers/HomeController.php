<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function data_statistic()
    {
        return view('data-statistic');
    }
}
