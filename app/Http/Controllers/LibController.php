<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibController extends Controller
{
    public function home() {
        return view('home');
    }
}
