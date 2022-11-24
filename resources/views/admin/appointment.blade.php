@extends('admin.admin_assets')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Manage Appointment Table</h1>
    <div class="card mt-4 mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Table Example
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}</div>
        @elseif(session('statusdel'))
        <div class="alert alert-danger mb-1 mt-1">
        {{ session('statusdel') }}</div>
        @endif
        <div class="card-body">
<table class="table table-bordered" id="datatablesSimple">
<tr>
<th>App_ID</th>
<th>User</th>
<th>Services</th>
<th>Date</th>
<th>Session</th>
<th>Pet</th>
<th>Clinic</th>
<th>Detail</th>
<th>Status</th>
<th>Action</th>
</tr>
@foreach ($apps as $app)
<tr>
<td>{{ $app->id }}</td>
<td>{{ $app->user['name'] }}</td>
<td>{{ $app->service['services_name'] }}</td>
<td>{{ $app->app_date }}</td>
<td>{{ $app->session['time'] }}</td>
<td>{{ $app->pet['pet_name'] }}</td>
<td>{{ $app->clinic['clinic_name'] }}</td>
<td>{{ $app->detail }}</td>
<td>{{ $app->status }}</td>
<td>
    <a class="btn btn-primary" href="appedit/{{ $app->id }}">Change Status</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delmodal">Delete</button>
</td>
</tr>
@endforeach
</table>
{{-- <button type="submit" class="btn btn-success">Save</button>
</form> --}}
        </div>
    </div>
</div>

{{-- modal --}}
<div class="modal fade" id="delmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="del">Data Will be Permanently Deleted</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer centering">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{ route('appointment.destroy',$app->id) }}" method="Post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection