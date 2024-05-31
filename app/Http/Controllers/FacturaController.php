<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use Barryvdh\DomPDF\Facade\Pdf;


class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factura = Factura::orderBy('created_at', 'DESC')->get();
  
        return view('facturas.index', compact('factura'));
    }

    public function pdf(){
        $facturas=Factura::all(); 
        $pdf = Pdf::loadView('facturas.pdf', compact('facturas'));
        return $pdf->stream();
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('facturas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Factura::create($request->all());
 
        return redirect()->route('facturas')->with('success', 'Factura agregada exitosamente');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $factura = Factura::findOrFail($id);
  
        return view('facturas.show', compact('factura'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $factura = Factura::findOrFail($id);
  
        return view('facturas.edit', compact('factura'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $factura = Factura::findOrFail($id);
  
        $factura->update($request->all());
  
        return redirect()->route('facturas')->with('success', 'factura actualizada correctamente');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $factura = Factura::findOrFail($id);
  
        $factura->delete();
  
        return redirect()->route('facturas')->with('success', 'Factura eliminada correctamente');
    }
}
