<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use Barryvdh\DomPDF\Facade\Pdf;


class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedor = Proveedor::orderBy('created_at', 'DESC')->get();
  
        return view('proveedores.index', compact('proveedor'));
    }

    public function pdf(){
        $proveedor=Proveedor::all(); 
        $pdf = Pdf::loadView('proveedores.pdf', compact('proveedor'));
        return $pdf->stream();
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Proveedor::create($request->except('_token'));

    return redirect()->route('proveedores')->with('success', 'Proveedor agregado exitosamente.');
}

  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
  
        return view('proveedores.show', compact('proveedor'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
  
        return view('proveedores.edit', compact('proveedor'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
  
        $proveedor->update($request->all());
  
        return redirect()->route('proveedores')->with('success', 'Proveedor actualizado correctamente.');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
  
        $proveedor->delete();
  
        return redirect()->route('proveedores')->with('success', 'Proveedor eliminado exitosamente.');
    }
}
