<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{
    public function index()
    {
        return view('carrito');
    }

    public function store(Request $request)
    {
        $carrito = new Carrito;
        $carrito->cliente = $request->input('cliente');
        $carrito->correo = $request->input('correo');
        $carrito->fechaEntrega = $request->input('fecha-entrega');
        $carrito->horaEntrega = $request->input('hora-entrega');
        $carrito->observaciones = $request->input('observaciones');
        $carrito->total = $request->input('total');
        $carrito->save();

        return 'Completado';
    }
}
