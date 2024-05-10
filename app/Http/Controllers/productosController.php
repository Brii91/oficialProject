<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class productosController extends Controller
{
    public function index()
    {
        return view('productos');
    }
}
