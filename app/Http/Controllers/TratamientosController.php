<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TratamientosController extends Controller
{

    public function Fotodepilacion()
    {
        /* 
        SELECT t.nombre, t.numero_sesiones, t.precio_oferta, t.imagen, t.zonas_id, d.sexo, s.nombre, s.tipo, z.zona_corporal
        FROM detalle_servicio_tratamientos AS d,
        servicios AS s,
        zonas as z,  
        tratamientos as t
        WHERE t.id = d.tratamientos_id
        AND d.servicios_id = s.id
        AND z.id = t.zonas_id
        AND s.tipo = 1;
 */

        $tfotodepilacion = DB::table('detalle_servicio_tratamientos')
            ->where('servicios_id', '=', 1)->get();
        echo $tfotodepilacion;


        return view('layouts.Fotodepilacion.index', ['data' => $tfotodepilacion]);
    }

    public function Fototerapia()
    {
        $tfototerapia = DB::table('detalle_servicio_tratamientos')
            ->where('servicios_id', '=', 2)->get();
        echo $tfototerapia;
        return view('layouts.Fototerapia.index', ['data' => $tfototerapia]);
    }
}
