<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservaController extends Controller
{

    /*
    
    SELECT count(*)
FROM horas, reservas
WHERE horas.id = reservas.horas_id and horas.id = 3;
    
    SELECT count(*)
    FROM horas, reservas
    WHERE horas.id = reservas.horas_id;
    
    */
}
