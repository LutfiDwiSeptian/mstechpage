<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest.home');
    }

    public function testcode()
    {
        return view('guest.testhome');
    }

    public function mrolanding()
    {
        return view('guest.mro_landing');
    }
}
