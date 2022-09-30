<?php

namespace App\Http\Controllers;

use App\Models\Clinic_admin;
use App\Http\Requests\StoreClinic_adminRequest;
use App\Http\Requests\UpdateClinic_adminRequest;

class ClinicAdminController extends Controller
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
     * @param  \App\Http\Requests\StoreClinic_adminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClinic_adminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clinic_admin  $clinic_admin
     * @return \Illuminate\Http\Response
     */
    public function show(Clinic_admin $clinic_admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clinic_admin  $clinic_admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinic_admin $clinic_admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClinic_adminRequest  $request
     * @param  \App\Models\Clinic_admin  $clinic_admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClinic_adminRequest $request, Clinic_admin $clinic_admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clinic_admin  $clinic_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clinic_admin $clinic_admin)
    {
        //
    }
}
