<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarProductoRequest;
use App\Http\Requests\GuardarProductoRequest;
use App\Http\Controllers\API\ProductoController;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $producto = Producto::all();
        return view('inicio', compact('producto'));
    }

    public function create()
    {
        return view('agregar');
    }
/*Api.php test
    public function store(GuardarProductoRequest $request)
    {
        \Log::info('Store method hit'); // Log to check if the method is called
        \Log::info($request->all()); // Log the request data for debugging

        $data = $request->all();
        $data['perecedero'] = $request->has('perecedero'); // Handle checkbox value

        Producto::create($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto guardado correctamente');
    }
*/
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'cantidad' => 'required|integer',
            'peso_unitario_gr' => 'required|integer',
        ]);

        // Convert 'on' to true and '' to false for perecedero
        $validatedData['perecedero'] = $request->has('perecedero');

        Producto::create($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto guardado correctamente');
    }

/* Old api.php
    public function show(Producto $producto)
    {
        return response()->json([
            'res' => true,
            'producto' => $producto
        ],200);
    }
*/

    public function show($id)
    {
        $producto = Producto::find($id);
        return view("eliminar", compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::find($id);

        return view('actualizar', compact('producto'));
    }
   
/* Old api.php
    public function update(ActualizarProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Producto actualizado correctamente ＾▽＾'
        ],200);
    }
*/
public function update(Request $request, $id)
{
    $producto = Producto::findOrFail($id);
    $validatedData = $request->validate([
        'nombre' => 'required|string',
        'cantidad' => 'required|integer',
        'peso_unitario_gr' => 'required|integer',
    ]);
    $validatedData['perecedero'] = $request->has('perecedero');
    $producto->update($validatedData);
    return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
}

/* Old api.php
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json([
            'res'=>true,
            'msg'=>'Producto eliminado correctamente(っ´ω`)ﾉ(╥ω╥)'
        ],200);
    }
*/

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route("productos.index")->with("success","Eliminado exitosamente");
    }
}
