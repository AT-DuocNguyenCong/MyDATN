<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function status(Request $request) 
    {
        $device1 = $request->device1;
        $device2 = $request->device2;
        return view('device', compact('device1', 'device2'));
    }
}
