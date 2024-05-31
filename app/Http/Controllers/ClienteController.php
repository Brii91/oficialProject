<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;



class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::orderBy('created_at', 'DESC')->get();
  
        return view('clientes.index', compact('cliente'));
    }
  
    public function pdf(){
        $clientes=Cliente::all(); 
        $pdf = Pdf::loadView('clientes.pdf', compact('clientes'));
        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cliente::create($request->all());
 
        return redirect()->route('clientes')->with('success', 'Cliente agregado exitosamente');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
  
        return view('clientes.show', compact('cliente'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
  
        return view('clientes.edit', compact('cliente'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
  
        $cliente->update($request->all());
  
        return redirect()->route('clientes')->with('success', 'Cliente actualizado exitosamente');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
  
        $cliente->delete();
  
        return redirect()->route('clientes')->with('success', 'Cliente eliminado correctamente');
    }
}
