<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;


class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Trabajador::with('Trabajador')->get();
    }

    public function store(Request $request)
    {
        return Trabajador::create($request->all());
    }

    public function show($id)
    {
        return Trabajador::with('Trabajador')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $venta = Trabajador::findOrFail($id);
        $venta->update($request->all());
        return $venta;
    }

    public function destroy($id)
    {
        $venta = Trabajador::findOrFail($id);
        $venta->delete();
        return response()->json(['message' => 'Trabajador eliminado con éxito']);
    }
}