<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Data;

class HomeController extends Controller
{
    /**
     * Show home page application.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Data::select('date', 'temp', 'pH')
            ->orderby('id', 'DESC')->first();
        return view('home', compact('data'));
    }
}
