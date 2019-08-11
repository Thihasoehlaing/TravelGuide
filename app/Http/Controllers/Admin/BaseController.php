<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function view($view, $data = array())
    {

        if (!str_contains($view, 'Admin.')) {
            $view = 'Admin.' . $view;
        }

        return view($view, $data);
    }
}
