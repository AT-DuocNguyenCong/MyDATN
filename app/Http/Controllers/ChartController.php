<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Show page char
     *
     */
    public function index()
    {
        return view('chart');
    }
}
