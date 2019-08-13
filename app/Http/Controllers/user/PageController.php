<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Model\Divisions;
use App\Model\Places;
use App\Model\Placetype;

class PageController extends BaseController
{
    public function home()
    {
        $divisionview  = Divisions::all();
        return $this->view('home', compact('divisionview'));
    }
    public function homepage()
    {
        return view('user.home');
    }

    public function Yangon()
    {
        return view('user.Division.yangon');
    }

    public function Shwedagon(){
        
        return view('user.Place.Yangon.shwedagon');
    }
}
