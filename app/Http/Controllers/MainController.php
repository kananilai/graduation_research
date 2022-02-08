<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        return view('left');
    }
    public function weight()
    {
        return view('weight');
    }
}
