<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Admin;
use Illuminate\Support\Facades\Hash;

class LoginController extends BaseController
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function loginValidation(Request $request)
    {
        return $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function loginAttempt($request)
    {
        $admin = Admin::first();
        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $this->clearLoginAttempts($request);
                //dd(auth('admin')->check());
                //dd($admin);
                auth('admin')->login($admin);
                //dd(auth('admin')->user());
                //dd($admin);
                return $admin;
            }
        }
        return false;
    }

    public function loginResponse()
    {
        return redirect()->route('admin.dashboard');
    }

    //getloginform//
    public function getLogin()
    {
        return $this->view('Admin.auth.login');
    }

    ///login///
    public function postLogin(Request $request)
    {
        $this->loginValidation($request);

        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $attemptUser = $this->loginAttempt($request);
        //dd($attemptUser);
        if ($attemptUser) {
            return $this->loginResponse();
        }
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function AdminLogout()
    {
        auth('admin')->logout();
        return redirect()->route('Admin.loginform');
    }
}
