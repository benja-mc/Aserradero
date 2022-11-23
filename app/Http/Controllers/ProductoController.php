<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.producto.index")->with('productos', Producto::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.producto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'especie' => 'required',
            'descripcion' => 'required',
            'diametro' => 'required',
            'volumen' => 'required',
            'imagen' => 'required|image',
        ]);

        $data = $request->all();

        if ($request->hasFile("imagen")) {
            $data['imagen'] = $request->imagen->store('/images/productos', 'public');
        }

        Producto::create($data);

        return back()->with(["message" => "Producto guardado correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view("dashboard.producto.edit")->with("producto", $producto);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'especie' => 'required',
            'descripcion' => 'required',
            'diametro' => 'required',
            'volumen' => 'required',
            'imagen' => 'required|image',
        ]);

        $data = $request->all();

        if ($request->hasFile("imagen")) {
            $data['imagen'] = $request->imagen->store('/images/productos', 'public');
        }else{
            unset($data['imagen']);
        }

        $producto->update($data);

        return back()->with(["message" => "Producto guardado correctamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        Storage::disk("public")->delete($producto->imagen);

        return back();
    }
}
