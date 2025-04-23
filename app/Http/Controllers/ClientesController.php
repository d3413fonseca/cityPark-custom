<?php

namespace App\Http\Controllers;

use App\Models\Clientes,
    App\Models\Rfid;
use Illuminate\Http\Request;

class ClientesController extends Controller {

    /**
     * Display a listing of the resource.
     */
    public function index() {
        $clients = Clientes::all();
        return view("clientes.index", compact('clients'));
    }
    
    /**
     * get Client Information
     */
    public function getInformation(Request $request) {
        // Valida o ID recebido
        $request->validate([
            'clientID' => 'required|integer|exists:Clients,id'
        ]);

        // Obter as informações do fornecedor
        $client = Clientes::find($request->clientID);

        // Retornar a informação em JSON
        return response()->json($client);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $RFIDs = Rfid::where('rfid_status', 'Inativo')->get();
        return view('clientes.create', compact('RFIDs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $this->validateClient($request);

        Clientes::create($request->all());

        $this->updateRFIDStatus($request->input('cli_rfidid'), 'Ativo');

        return redirect()->route('admin.clientes')->with('success', 'Cliente criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes) {
        $hasRFID = $clientes->cli_rfidid != "" ? Rfid::where('id', $clientes->cli_rfidid)->first() : "";
        $RFIDs = Rfid::where('rfid_status', 'Inativo')->get();
        return view('clientes.edit', compact('clientes', 'hasRFID', 'RFIDs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $clientes) {
        $this->validateClient($request, $clientes->id);
        $clientes->update($request->all());
        if ($request->input('cli_old_rfidid') != $request->input('cli_rfidid')) { // Sem / Novo cartão RFID
            // Libertar o antigo
            $this->updateRFIDStatus($request->input('cli_old_rfidid'), 'Inativo');
            // Novo Cartão            
            $this->updateRFIDStatus($request->input('cli_rfidid'), 'Ativo');
        }

        return redirect()->route('admin.clientes')->with('success', 'Cliente editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $clientes) {
        $clientes->delete();
        return redirect()->route('admin.clientes')->with('success', 'Cliente Eliminado com sucesso!');
    }

    /**
     * Validate Form
     */
    protected function validateClient(Request $request, $cliID = null) {
        return $request->validate([
                    "cli_name" => "required",
                    "cli_email" => "required|email|unique:clients,cli_email,{$cliID},id",
                    "cli_address1" => "required|max:180",
                    "cli_zipcode" => "required",
                    "cli_city" => "required|max:100",
                    "cli_nif" => "required",
                        ], [
                    "cli_name.required" => "O campo de Nome do cliente é obrigatório.",
                    "cli_email.required" => "O campo de E-mail é obrigatório.",
                    "cli_email.email" => "O campo de E-mail deve ser um endereço de email válido.",
                    "cli_email.unique" => "O E-mail inserido já está a ser utilizado por outro cliente.",
                    "cli_address1.required" => "O campo de Morada é obrigatório.",
                    "cli_zipcode.required" => "O campo de Código Postal é obrigatório.",
                    "cli_city.required" => "O campo de Localidade é obrigatório.",
                    "cli_nif.required" => "O campo de NIF é obrigatório."
        ]);
    }

    /**
     * Update RFID Status
     */
    protected function updateRFIDStatus($rfidId, $status) {
        if ($rfidId && $rfidId != "") {
            Rfid::where('id', $rfidId)->update([
                'rfid_status' => $status
            ]);
        }
    }

}
