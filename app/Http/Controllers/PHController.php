<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Data;

class PHController extends Controller
{
    public function getPH()
    {
    	$data = Data::select('date', 'pH')->orderby('id', 'DESC')->first();
        $date = $data->date;
        $pH = $data->pH;
        $pHArray = array((floatval($date)+25200)*1000, floatval($pH));
        return json_encode($pHArray);	
   	}
}
