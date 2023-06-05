<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FotodepilacionController extends Controller
{
    public function index()
    {
        
        return view('layouts.servicios-1.index');
    }
}
