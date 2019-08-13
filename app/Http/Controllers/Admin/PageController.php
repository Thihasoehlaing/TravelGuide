<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\Divisions;
use App\Model\Places;
use App\Model\Placetype;

class PageController extends BaseController
{
    Public function Dashboard()
    {
        $admin = Admin::first();
        $divisionview  = Divisions::all();
        return $this->view ('Admin.layout.dashboard', compact('admin','divisionview'));
    }

    public function NewDivision()
    {
        $admin = Admin::first();
        return view('admin.layout.newdivision', compact('admin'));
    }

    public function Place()
    {
        $admin = Admin::first();
        $placeview = Places::with('division','placetype')->get();
        return view('admin.layout.place', compact('admin', 'placeview'));
    }

    public function NewPlace()
    {
        $admin = Admin::first();
        $divisionview  = Divisions::all();
        $placetype = Placetype::all();
        return view('admin.layout.newplace', compact('admin', 'divisionview', 'placetype'));
    }
}
