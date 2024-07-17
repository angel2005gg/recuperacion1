<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->get();
        return view('Cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('Cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->codigo = $request->codigo;
        $cliente->tfno = $request->tfno;
        $cliente->num_social = $request->num_social;
        $cliente->domicilio = $request->domicilio;
    
        $cliente->save();
    
        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }

    public function show(Cliente $cliente)
    {
        return view('Cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('Cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->codigo = $request->codigo;
        $cliente->tfno = $request->tfno;
        $cliente->num_social = $request->num_social;
        $cliente->domicilio = $request->domicilio;

        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }
}
