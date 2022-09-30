<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreappointmentRequest;
use App\Http\Requests\UpdateappointmentRequest;



class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppointmentRequest $request)
    {
        // Appointment::create([
        //     'user_id' => $request->user_id,
        //     'address' => $request->address,
        //     'city' => $request->city,
        //     'app_date' => $request->app_date,
        //     'session' => $request->session,
        //     'branch' => $request->branch,
        //     'notelp' => $request->notelp,
        //     'petsex' => $request->petsex,
        //     'petages' => $request->petages,
        //     'petweights' => $request->petweights,
        //     'detail' => $request->detail,
        //     'pet_id' => $request->pet_id
        // ]);
        // return redirect('/')->with('status', 'Data telah tersimpan di database');
        // ]);
        // return redirect('/home')->with('status', 'Data telah tersimpan di database');
        // dd($request->first_name);
        // $id = Auth::id();
        // dd($request->user_id);
        if ($request->isMethod('post')) {
            Appointment::create([
                'user_id' => $request->user_id,
                'address' => $request->address,
                'city' => $request->city,
                'app_date' => $request->app_date,
                'session' => $request->session,
                'branch' => $request->branch,
                'notelp' => $request->notelp,
                'petsex' => $request->petsex,
                'petages' => $request->petages,
                'petweights' => $request->petweights,
                'detail' => $request->detail,
                'pet_id' => $request->pet_id,
            ]);
            return redirect('/')->with('status', 'Data telah tersimpan di database');
        }
        return view('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
