<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Compra;
use App\Models\Ativo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Compra::all();
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
            'data_compra' => 'required|date',
            'quantidade' => 'required|integer',
            'cotacao' => 'required|numeric',
        ]);

        $compra = Compra::create($request->all());
        return response()->json($compra, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Compra::findOrFail($id);
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
        $compra = Compra::findOrFail($id);
        $compra->update($request->all());
        return response()->json($compra, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();
        return response()->json(null, 204);
    }
}
