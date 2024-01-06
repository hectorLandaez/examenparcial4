<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
{
    public function index()
    {
        return Venta::with('cliente')->get();
    }

    public function store(Request $request)
    {
        return Venta::create($request->all());
    }

    public function show($id)
    {
        return Venta::with('cliente')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->update($request->all());
        return $venta;
    }

    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();
        return response()->json(['message' => 'Venta eliminada con éxito']);
    }
}
