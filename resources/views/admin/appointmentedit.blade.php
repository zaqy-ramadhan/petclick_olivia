@extends('admin.admin_assets')
@section('content')
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Manage Appointement Table</h1>
                    <div class="card mt-4 mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Table Example
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <form action="/appedit/{{ $appointment->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col">
                                    <select name="status" type="text" class="form-select" readonly aria-label="Default select example">
                                        {{-- <option value="{{ $appointment->status }}">{{ $appointment->status }}</option> --}}
                                        <option value="Appointment Cancelled">Appointment Cancelled</option>
                                        <option value="Appointment Scheduled">Appointment Scheduled</option>
                                        <option value="Appointment Ongoing">Appointment Ongoing</option>
                                        <option value="Appointment Done">Appointment Done</option>
                                    </select>
                                    <label class="p-1 mt-2" for="">Current status : {{ $appointment->status}}</label>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group mt-2">
                                            <strong >User Name:</strong>
                                                <input type="text" name="name" value="{{ $user->name }}" class="form-control mt-2" placeholder="User Name">
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <strong >User Email:</strong>
                                                <input type="text" name="email" value="{{ $user->email }}" class="form-control mt-2" placeholder="User Email">
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <strong >User Phone Number:</strong>
                                                <input type="text" name="number" value="{{ $user->notelp }}" class="form-control mt-2" placeholder="User Phone Number">
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <strong >User Address:</strong>
                                                <input type="text" name="address" value="{{ $user->address }}" class="form-control mt-2" placeholder="User Address">
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <strong >User City:</strong>
                                                <input type="text" name="city" value="{{ $user->city}}" class="form-control mt-2" placeholder="User City">
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <strong >User Role:</strong>
                                                <input type="text" name="role" value="{{ $user->role}}" class="form-control mt-2" placeholder="User Role">
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </main>
    @endsection