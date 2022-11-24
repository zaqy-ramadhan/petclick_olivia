<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreappointmentRequest;
use App\Http\Requests\UpdateappointmentRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app = Appointment::with(['user', 'pet', 'service', 'session', 'clinic'])->get();
        return view('admin.appointment', [
            "apps" => $app
        ]);
    }

    public function myapp()
    {
        $appointment = Appointment::with(['service', 'session', 'clinic'])->get();
        return view('myappointment', [
            "appointments" => $appointment
        ]);
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
                'app_date' => $request->app_date,
                'session_id' => $request->session,
                'clinic_id' => $request->branch,
                'detail' => $request->detail,
                'pet_id' => $request->pet_id,
                'service_id' => $request->service,
            ]);
            return redirect('/')->with('status', 'New Data Added to Database');
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
        return view('admin.appointment', [
            "appointment" => $appointment
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment, $id)
    {
        $appointment = Appointment::findOrFail($id);
        // dd($pet);
        return view('admin.appointmentedit', ['appointment' => $appointment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppointmentRequest  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = $request->status;
        $appointment->save();
        return redirect('/adm-app')->with('status', 'Status Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect('/adm-app')->with('statusdel', 'Data Deleted');
    }
}
