<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ativo;


class AtivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ativo::all();
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
            'ticker_ativo' => 'required|string',
            'data_compra' => 'required|date',
            'quantidade' => 'required|integer',
            'cotacao' => 'required|numeric',
            'tipo' => 'required|string',
        ]);

        $ativo = Ativo::create($request->all());
        return response()->json($ativo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Ativo::findOrFail($id);
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
        $ativo = Ativo::findOrFail($id);
        $ativo->update($request->all());
        return response()->json($ativo, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ativo = Ativo::findOrFail($id);
        $ativo->delete();
        return response()->json(null, 204);
    }
}
