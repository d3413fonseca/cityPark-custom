<?php

namespace App\Http\Controllers;

use App\Models\Rfid;
use Illuminate\Http\Request;

class RfidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rfid = Rfid::all();
        return view('rfid.index', compact('rfid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rfid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateRFID($request);

        Rfid::create($request->all());

        return redirect()->route('admin.rfid')
                        ->with('success', 'Cartão RFID adicionado com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rfid $rfid)
    {
        return view('rfid.edit', compact('rfid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rfid $rfid)
    {
        $this->validateRFID($request);
        
        $statusRFID = ($request->input('rfid_status')) ? "Ativo" : "Inativo";
        
        $rfid->update([
                'rfid_mac' => $request->input('rfid_mac'),
                'rfid_status' => $statusRFID
            ]);
        
        return redirect()->route('admin.rfid')->with('success', 'Cartão RFID editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rfid $rfid)
    {
        $rfid->delete();

        return redirect()->route('admin.rfid')
                        ->with('success', 'Cartão RFID eliminado com sucesso.');
    }

    /**
     * Validate Form
     */
    protected function validateRFID(Request $request)
    {
        $request->validate([
            "rfid_mac" => "required"
        ], [
            "rfid_mac.required" => "O #MAC do RFID é obrigatório."
        ]);
    }
}
