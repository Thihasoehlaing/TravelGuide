<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends BaseController
{
    Public function Dashboard()
    {
        return view('Admin.layout.dashboard');
    }
}
