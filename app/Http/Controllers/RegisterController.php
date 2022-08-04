<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
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
     * Show registration form
     *
     * @return view for registeration
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
