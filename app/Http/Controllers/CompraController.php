<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class CompraController extends Controller
{
    public function index()
    {
        return Compra::with('compras')->get();
    }

    public function store(Request $request)
    {
        return Compra::create($request->all());
    }

    public function show($id)
    {
        return Compra::with('compras')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $venta = Compra::findOrFail($id);
        $venta->update($request->all());
        return $venta;
    }

    public function destroy($id)
    {
        $venta = Compra::findOrFail($id);
        $venta->delete();
        return response()->json(['message' => 'Compra eliminada con éxito']);
    }
}
