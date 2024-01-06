<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalle_venta;

class detalleventaController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return detalle_venta::with('detalle_ventas')->get();
    }

    public function store(Request $request)
    {
        return detalle_venta::create($request->all());
    }

    public function show($id)
    {
        return detalle_venta::with('detalle_ventas')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $venta = detalle_venta::findOrFail($id);
        $venta->update($request->all());
        return $venta;
    }

    public function destroy($id)
    {
        $venta = detalle_venta::findOrFail($id);
        $venta->delete();
        return response()->json(['message' => 'detalle_venta eliminada con éxito']);
    }
}
