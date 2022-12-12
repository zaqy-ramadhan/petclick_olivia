@extends('homeassets')
@section('content')
<div class="container">
    <h1 class="mt-4">My Appointment</h1>
<div class="card mt-4 mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
    </div>
    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-success mb-3 mt-1">
        {{ session('status') }}</div>
        @endif
        <table class="table table-bordered" id="datatablesSimple">
            <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Clinic</th>
            <th>Services</th>
            <th>Bill</th>
            <th>Status</th>
            <th style="width:170px">Action</th>
            </tr>
            @foreach ($appointments->where('user_id', auth::user()->id) as $appointment)
            <tr>
            <td>{{$appointment->app_date}}</td>
            <td>{{$appointment->session['time']}}</td>
            <td>{{$appointment->clinic['clinic_name']}}</td>
            <td>{{$appointment->service['services_name']}}</td>
            <td>${{ $appointment->bill }}</td>
            <td>{{$appointment->status }}</td>
            <td>
                <a href="/payment/{{ $appointment->id }}" class="btn btn-warning mt-1" >Pay</a>
                <a href="invoice/{{ $appointment->id }}" target="_blank" class="btn btn-success mt-1" >Invoice</a>
                @foreach($rec->where('app_id',$appointment->id) as $rc)
                @if($rc!==null)
                <a href="storage/{{ $rc->receipt }}" target="_blank" class="btn btn-primary mt-1" style="width:130px">Your Receipt</a>
                @endif
                @endforeach
            </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
@endsection