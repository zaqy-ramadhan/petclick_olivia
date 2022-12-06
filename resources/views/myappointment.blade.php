@extends('homeassets')
@section('content')
<div class="container">
    <h1 class="mt-4">My Appointment</h1>
<div class="card mt-4 mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="datatablesSimple">
            <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Clinic</th>
            <th>Services</th>
            <th width="280px">Status</th>
            </tr>
            @foreach ($appointments->where('user_id', auth::user()->id) as $appointment)
            <tr>
            <td>{{$appointment->app_date}}</td>
            <td>{{$appointment->session['time']}}</td>
            <td>{{$appointment->clinic['clinic_name']}}</td>
            <td>{{$appointment->service['services_name']}}</td>
            <td>{{$appointment->status }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
@endsection