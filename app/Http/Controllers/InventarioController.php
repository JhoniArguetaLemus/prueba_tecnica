<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class InventarioController extends Controller
{
    public function showForm($id)
    {
        $producto = Producto::findOrFail($id);
        return view('inventario.form', compact('producto'));
    }

   
    public function updateInventory(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        
        $request->validate([
            'cantidad' => 'required|integer',
            'tipo' => 'required|in:entrada,salida',
        ]);

     
        if ($request->tipo == 'entrada') {
            $producto->cantidad += $request->cantidad;
        } else if ($request->tipo == 'salida') {
            $producto->cantidad -= $request->cantidad;
        }

        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Inventario actualizado correctamente');
    }
}
