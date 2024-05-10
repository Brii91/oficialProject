<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tiendaController extends Controller
{
    public function index()
    {
        return view('tienda');
    }
}
