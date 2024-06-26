<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Empleado;
use Barryvdh\DomPDF\Facade\Pdf;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $empleados = Empleado::orderBy('created_at', 'DESC')->get(); 
    return view('empleados.index', compact('empleados'));       
}

public function pdf(){
    $empleados=Empleado::all(); 
    $pdf = Pdf::loadView('empleados.pdf', compact('empleados'));
    return $pdf->stream();
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleados.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Empleado::create($request->all());
 
        return redirect()->route('empleados')->with('success', 'Empleado agregado exitosamente');
    }
  
    /**
     * Display the specified resource.
     */
public function show(string $id)
{
    $empleado = Empleado::findOrFail($id);

    return view('empleados.show', compact('empleado'));
}


  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleado = Empleado::findOrFail($id);
  
        return view('empleados.edit', compact('empleado'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);
  
        $empleado->update($request->all());
  
        return redirect()->route('empleados')->with('success', 'Empleado actualizado correctamente');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = Empleado::findOrFail($id);
  
        $empleado->delete();
  
        return redirect()->route('empleados')->with('success', 'Empleado eliminado correctamente');
    }
}

