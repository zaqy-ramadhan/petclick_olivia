<?php

namespace App\Http\Controllers;

use App\Models\entity;
use App\Http\Requests\StoreentityRequest;
use App\Http\Requests\UpdateentityRequest;

class EntityController extends Controller
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
     * @param  \App\Http\Requests\StoreentityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreentityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function show(entity $entity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function edit(entity $entity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateentityRequest  $request
     * @param  \App\Models\entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateentityRequest $request, entity $entity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function destroy(entity $entity)
    {
        //
    }
}
