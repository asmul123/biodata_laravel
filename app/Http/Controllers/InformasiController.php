<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
 

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasi = Informasi::where('id', 1)->first();

        return view('informasiindex', ['informasi' => $informasi]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
