<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        return articulo::with('articulos')->get();
    }

    public function store(Request $request)
    {
        return articulo::create($request->all());
    }

    public function show($id)
    {
        return articulo::with('articulos')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $venta = articulo::findOrFail($id);
        $venta->update($request->all());
        return $venta;
    }

    public function destroy($id)
    {
        $venta = articulo::findOrFail($id);
        $venta->delete();
        return response()->json(['message' => 'articulo eliminado con éxito']);
    }
}
