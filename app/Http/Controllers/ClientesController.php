<?php

namespace App\Http\Controllers;

use App\Models\Clientes,
    App\Models\Rfid;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rfid = Rfid::where('rfid_status', 'Inativo')->get();

        return view('clientes.create', compact('rfid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateClient($request);
    
        // Criar o cliente
        Clientes::create($request->all());
    
        // Redirecionar com sucesso
        return redirect()->route('admin.clientes')
                        ->with('success', 'Cliente criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes)
    {
        $rfid = Rfid::where('rfid_status', 'Inativo')->get();
        return view('clientes.edit', compact('clientes', 'rfid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $clientes)
    {
        $this->validateClient($request);

        $clientes->update($request->all());

        return redirect()->route('admin.clientes')
                        ->with('success', 'Cliente editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $clientes)
    {
        $clientes->delete();

        return redirect()->route('admin.clientes')
                        ->with('success', 'Cliente eliminado com sucesso.');
    }

    protected function validateClient(Request $request)
    {
        $request->validate([
            'cli_name' => 'required|string|max:180',
            'cli_email' => 'required|email|max:180',
            'cli_phone' => 'nullable|string|max:20',
            'cli_address1' => 'required|string|max:180',
            'cli_address2' => 'nullable|string|max:180',
            'cli_zipcode' => 'required|string|max:20',
            'cli_city' => 'required|string|max:100',
            'cli_nif' => 'required|string|max:15',
            'cli_rfidid' => 'required|exists:rfid,id',
        ], [
            'cli_name.required' => "O Nome do Cliente é obrigatório.",
            'cli_email.required' => "O E-mail do Cliente é obrigatório.",
            'cli_address1.required' => "O Endereço do Cliente é obrigatório.",
            'cli_zipcode.required' => "O Código Postal do Cliente é obrigatório.",
            'cli_city.required' => "A Cidade do Cliente é obrigatório.",
            'cli_nif.required' => "O NIF do Cliente é obrigatório.",
            'cli_rfidid.required' => "O Cartão RFID do Cliente é obrigatório."
        ]);
    }
}
