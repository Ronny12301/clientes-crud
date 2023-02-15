<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view("clientes.index", compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // validar los datos
        $request->validate([
            "nombre" => "required",
            "rfc" => "required",
            "direccion" => "required",
            "telefono" => "int",
            "email" => "required|email",
        ]);

        // agregar cliente a la base de datos
        Cliente::create($request->all());

        // redireccionar al inicio
        return redirect()->route("clientes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        // validar los datos
        $request->validate([
            "nombre" => "required",
            "rfc" => "required",
            "direccion" => "required",
            "telefono" => "int",
            "email" => "required|email",
        ]);

        // agregar cliente a la base de datos
        $cliente->update($request->all());

        // redireccionar al inicio
        return redirect()->route("clientes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        // redireccionar al inicio
        return redirect()->route("clientes.index");
    }
}
