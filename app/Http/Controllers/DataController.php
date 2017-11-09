<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Data;

class DataController extends Controller
{
    public function index()
    {	
    	$data = Data::orderby('id', 'DESC')->paginate(Data::DATA_LIMIT);
    	return view('data', compact('data'));
    }
}
