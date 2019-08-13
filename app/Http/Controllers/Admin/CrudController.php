<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\Places;
use App\Model\Divisions;
use App\Model\Placetype;

class CrudController extends Controller
{
    //places
    public function edit($id)
    {
        $places = Places::find($id);
        $admin = Admin::first();
        $divisionview  = Divisions::all();
        $placetype = Placetype::all();
        return view('Admin.layout.editplace', [
            'places' => $places
        ], compact('admin', 'divisionview', 'placetype'));
    }

    public function update($id)
    {
        $places                 = Places::find($id);
        $places->placename      = request()->name;
        $places->division_id    = request()->divisionid;
        $places->city           = request()->city;
        $places->fileimage      = request()->fileimage;
        $places->township       = request()->town;
        $places->placetype_id   = request()->placetypeid;
        $places->note           = request()->note;
        $places->lat            = request()->plat;
        $places->long           = request()->plong;
        $places->save();
        return redirect()->route('place');
    }

    public function delete($id)
    {
        $places = Places::find($id);
        $places->delete();
        return redirect()->route('place');
        //return redirect('/posts')->with('info', 'A post deleted');
    }

    //Divisions
    public function dedit($id)
    {
        $division = Divisions::find($id);
        $admin = Admin::first();
        $divisionview  = Divisions::all();
        $placetype = Placetype::all();
        return view('Admin.layout.editdivision', [
            'division' => $division
        ], compact('admin', 'divisionview', 'placetype'));
    }

    public function dupdate($id)
    {
        $division                 = Divisions::find($id);
        $division->divisionname   = request()->name;
        $division->city           = request()->city;
        $division->fileimage      = request()->fileimage;
        $division->zip_code       = request()->town;
        $division->lat            = request()->dlat;
        $division->long           = request()->dlong;
        $division->save();
        return redirect()->route('admin.dashboard');
    }

    public function ddelete($id)
    {
        $division = Divisions::find($id);
        $division->delete();
        return redirect()->route('admin.dashboard');
        //return redirect('/posts')->with('info', 'A post deleted');
    }
}
