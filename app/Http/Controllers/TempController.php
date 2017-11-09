<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Data;

class TempController extends Controller
{
    public function getTemp()
    {
    	$data = Data::select('date', 'temp')->orderby('id', 'DESC')->first();
        $date = $data->date;
        $temp = $data->temp;
        $tempArray = array((floatval($date)+25200)*1000, floatval($temp));
        return json_encode($tempArray);	
   	}
}
