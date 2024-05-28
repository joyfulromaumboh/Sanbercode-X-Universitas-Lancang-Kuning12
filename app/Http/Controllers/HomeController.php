<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('lamanku.home');
    }

    public function form()
    {
        return view('form');
    }
}
