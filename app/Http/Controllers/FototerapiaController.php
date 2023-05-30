<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FototerapiaController extends Controller
{
    //
    public function index()
    {
        return view('layouts.servicios-2.index');
    }
}
