<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Model\Places;

class PageController extends BaseController
{
    public function home()
    {
        return $this->view('home');
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
