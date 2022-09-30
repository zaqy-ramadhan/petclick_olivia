<?php

namespace App\Http\Controllers;

use App\Models\cabang_klinik;
use App\Http\Requests\Storecabang_klinikRequest;
use App\Http\Requests\Updatecabang_klinikRequest;

class CabangKlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storecabang_klinikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecabang_klinikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cabang_klinik  $cabang_klinik
     * @return \Illuminate\Http\Response
     */
    public function show(cabang_klinik $cabang_klinik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cabang_klinik  $cabang_klinik
     * @return \Illuminate\Http\Response
     */
    public function edit(cabang_klinik $cabang_klinik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecabang_klinikRequest  $request
     * @param  \App\Models\cabang_klinik  $cabang_klinik
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecabang_klinikRequest $request, cabang_klinik $cabang_klinik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cabang_klinik  $cabang_klinik
     * @return \Illuminate\Http\Response
     */
    public function destroy(cabang_klinik $cabang_klinik)
    {
        //
    }
}
