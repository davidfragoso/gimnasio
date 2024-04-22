<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clientes = Cliente::all();
        // return view('clientes.index', compact('clientes'));
        return Cliente::get();
    }

    // public function getClients()
    // {
    //     $clientes = Cliente::whereIn('id_cliente')->get();
    //     return response()->json($clientes);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required|string',
        //     'apellido' => 'required|string',
        //     'email' => 'required|email|unique:clientes,email',
        //     'estatus' => 'required|int',
        // ]);
        return Cliente::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email|unique:clientes,email,' . $id,
            'estatus' => 'required|boolean',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Obtener el cliente por su ID y eliminarlo
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        // Redirigir de vuelta con un mensaje de éxito
        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado correctamente.');
    }
}
