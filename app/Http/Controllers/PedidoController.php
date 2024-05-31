<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedido = Pedido::orderBy('created_at', 'DESC')->get();
  
        return view('pedido.index', compact('pedido'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedido.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pedido::create($request->all());
 
        return redirect()->route('pedido')->with('success', 'Pedido agregado exitosamente');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pedido = Pedido::findOrFail($id);
  
        return view('pedido.show', compact('pedido'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pedidos = Pedido::findOrFail($id);
  
        return view('pedidos.edit', compact('pedidos'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedido = Pedido::findOrFail($id);
  
        $pedido->update($request->all());
  
        return redirect()->route('pedido')->with('success', 'Pedido actualizado correctamente');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido = Pedido::findOrFail($id);
  
        $pedido->delete();
  
        return redirect()->route('pedido')->with('success', 'Pedido eliminado correctamente');
    }
}