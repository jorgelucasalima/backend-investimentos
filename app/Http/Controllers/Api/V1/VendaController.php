<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Venda;
use App\Models\Ativo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Venda::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ticker_ativo' => 'required|exists:ativos,id',  // FK referenciando o ativo
            'data_venda' => 'required|date',
            'quantidade' => 'required|integer',
        ]);

        $venda = Venda::create($request->all());
        return response()->json($venda, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Venda::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $venda = Venda::findOrFail($id);
        $venda->update($request->all());
        return response()->json($venda, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venda = Venda::findOrFail($id);
        $venda->delete();
        return response()->json(null, 204);
    }
}
