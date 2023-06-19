<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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


        $data = DB::table('detalle_servicio_tratamientos')
            ->join('tratamientos', 'tratamientos.id', '=', 'detalle_servicio_tratamientos.tratamientos_id')
            ->join('servicios',  'detalle_servicio_tratamientos.servicios_id', '=', 'servicios.id')
            ->join('zonas', 'zonas.id', '=', 'tratamientos.zonas_id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')s
            ->select('tratamientos.*', 'zonas.zona_corporal')
            ->where('.servicios.tipo', '=', 1)
            ->get();

        if (isset($data) && count($data) > 0) {
            return view('layouts.Fotodepilacion.index', ['data' => $data]);
        } else {
            echo ('sindatos');
        }




        /*  $tfotodepilacion = DB::table('detalle_servicio_tratamientos')
            ->where('servicios_id', '=', 1)->get(); */
    }

    public function getHora(Request $request)
    {
        return 'ok';
    }
    public function Fototerapia()
    {
        $tfototerapia = DB::table('detalle_servicio_tratamientos')
            ->where('servicios_id', '=', 2)->get();
        echo $tfototerapia;
        return view('layouts.Fototerapia.index', ['data' => $tfototerapia]);
    }
}
