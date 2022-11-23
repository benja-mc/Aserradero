<?php

namespace App\Http\Controllers;

use App\Models\Madera;
use Illuminate\Http\Request;

class MaderaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.madera.index")->with('maderas', Madera::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'diametro' => 'required',
            'volumen' => 'required',
        ]);

        Madera::create($request->all());

        return back()->with(["message" => "Madera guardado correctamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function show(Madera $madera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function edit(Madera $madera)
    {
        return view("dashboard.madera.edit")->with("madera", $madera);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Madera $madera)
    {
        $request->validate([
            'especie' => 'required',
            'diametro' => 'required',
            'volumen' => 'required',
        ]);

        $madera->update($request->all());

        return back()->with(["message" => "Madera guardado correctamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Madera  $madera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Madera $madera)
    {
        $madera->delete();

        return back();
    }
}
