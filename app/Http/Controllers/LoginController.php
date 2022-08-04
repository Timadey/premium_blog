<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('throttle:10,1');
    }

    /**
     * Show login form
     *
     * @return view for login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
