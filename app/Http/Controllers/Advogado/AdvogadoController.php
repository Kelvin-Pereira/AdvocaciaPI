<?php

namespace App\Http\Controllers\Advogado;

use App\Advogado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Advogado.index');
    }
    public function CadastroAdvogado()
    {
        return view('Advogado.creat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function show(Advogado $advogado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function edit(Advogado $advogado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advogado $advogado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advogado  $advogado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advogado $advogado)
    {
        //
    }
}
