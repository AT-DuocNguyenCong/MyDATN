<?php
namespace App\Http\Controllers;

use App\Model\Data;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddDataController extends Controller
{
    public function getData(Request $request)
    {   
        // Get temperature from Arduino
        //$temp = htmlspecialchars($_GET["nhietdo"],ENT_QUOTES);
        // Get pH from Arduino
        //$pH = htmlspecialchars($_GET["pH"],ENT_QUOTES); 
        //Insert data into database.
        $nhietdo = $request->nhietdo;
        $pH = $request->pH;
        Data::create([
            'date' => DB::raw('UNIX_TIMESTAMP(now())'),
            'temp' => $nhietdo,
            'pH' => $pH
            ]);
    }
}
