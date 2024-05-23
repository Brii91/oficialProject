<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topping;


class ToppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topping = Topping::orderBy('created_at', 'DESC')->get();
  
        return view('toppings.index', compact('topping'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('toppings.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Topping::create($request->all());
 
        return redirect()->route('toppings')->with('success', 'topping added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topping = Topping::findOrFail($id);
  
        return view('toppings.show', compact('topping'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topping = Topping::findOrFail($id);
  
        return view('toppings.edit', compact('topping'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $topping = Topping::findOrFail($id);
  
        $topping->update($request->all());
  
        return redirect()->route('toppings')->with('success', 'topping updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topping = Topping::findOrFail($id);
  
        $topping->delete();
  
        return redirect()->route('toppings')->with('success', 'Topping eliminado correctamente');
    }
}
