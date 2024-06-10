<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('producto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'categoria_id' => 'required',
            'tamano_id' => 'required',
            'foto' => 'required|image|max:2048',
            'descripcion' => 'required'
        ]);

        $imagen_url = Cloudinary::upload($request->file('foto')->getRealPath())->getSecurePath();

        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'categoria_id' => $request->categoria_id,
            'tamano_id' => $request->tamano_id,
            'imagen_url' => $imagen_url,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('productos.index')->with('success','producto creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::destroy($id);
        return redirect(route('productos.index'))->with('success', 'producto eliminada exitosamente');
    }
}
