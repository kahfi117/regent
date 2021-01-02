<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function index()
    {
        return view ();
    }

    public function register()
    {
        return view('tampilan_local.local_register');
    }
    public function profile()
    {
        return view('tampilan_local.local_profile');
    }

}