<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Places;
use App\Model\Divisions;

class PlaceController extends Controller
{
    public function Place(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'city' => 'required|string',
        //     'fileimage' => 'required|string',
        //     'zipcode' => 'required|string',
        //     'dlat' => 'required|string',
        //     'dlong' => 'required|string',
        // ]);

        Places::create([
            'division_id'       =>  $request->divisionid,
            'placename'         =>  $request->name,
            'city'              =>  $request->city,
            'township'          =>  $request->town,
            'fileimage'         =>  $request->fileimage,
            'placetype_id'      =>  $request->placetypeid,
            'note'              =>  $request->note,
            'lat'               =>  $request->plat,
            'long'              =>  $request->plong,
        ]);

        return redirect()->route('place');
    }
}
