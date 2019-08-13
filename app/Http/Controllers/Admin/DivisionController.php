<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Divisions;

class DivisionController extends Controller
{
    public function Division(Request $request)
    {   
        // $request->validate([
        //     'name' => 'required|string',
        //     'city' => 'required|string',
        //     'fileimage' => 'required|string',
        //     'zipcode' => 'required|string',
        //     'dlat' => 'required|string',
        //     'dlong' => 'required|string',
        // ]);

        Divisions::create([
            'divisionname'      =>  $request->name,
            'city'              =>  $request->city,
            'fileimage'         =>  $request->fileimage,
            'zip_code'          =>  $request->zipcode,
            'lat'               =>  $request->dlat,
            'long'              =>  $request->dlong
        ]);
        
        return redirect()->route('admin.dashboard');
    }
}
