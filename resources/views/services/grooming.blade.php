<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grooming - Petclick</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cssku.css">
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top p-3">
    <div class="container">
        <a href="/"><img class="img-fluid" src="{{ URL::to('/assets/petclick_logo-light.png') }}" style="width: 100px"></a>
        {{-- <a class="navbar-brand" href="#">PetClick</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse righting" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#services">Services</a>
          </li>
          <li class="nav-tem">
            <a class="nav-link" href="/#gallery">Gallery</a>
          </li>
          <li class="nav-tem">
            <a class="nav-link" href="/#location">Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="/#contact">Contact</a>
          </li>
          <li class="nav-item">
            @if (Route::has('login'))
                  <div class="hidden fixed top-0 right-0 sm:block">
                      @auth
                          {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                          @extends('layouts.app')
                          @section('content')
                          @endsection --}}
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              <a class="dropdown-item" href="/myapp">My Appointement</a>
                              <a class="dropdown-item" href="/myprofile">My Profile</a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </li>
                      @else
                          <li class="nav-item">
                            <a href="{{ route('login') }}" ><button type="button" class="btn btn-success rounded-pill">Login / Register</button></a>
                          </li>
                          {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
  
                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                          @endif --}}
                      @endauth
                  </div>
              @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- banner --}}
  <div class="parallax-consultation d-flex justify-content-center align-items-center">
    <div class="container banner-content col-lg-6 position-absolute">
      <h2 class="fs-1 fw-semibold">GROOMING</h2>
    </div>
  </div>

  {{-- desc --}}
  <div class="container centering mt-5">
    <div class="container m-5">
      <div class="container">
        <p style="text-align: center">Our animal care refers to the hygienic care and cleaning of animals, as well as the process by which the physical appearance of animals is improved for performances or other types of competition. An animal groomer is a person who makes a living by taking care of their animals.</p>

      </div>
      <div class="row m-5 centering">
        <div class="col-sm-3 centering mt-3 mx-4">
          <div class="card shadow" style="width: 18rem; border-radius: 17px;">
            <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="grooming" style="border-radius: 17px;">
            <div class="card-body">
              <h5 class="card-title" style="color: #323D51">Grooming</h5>
            </div>
            <a><button class="btn btn-success ms-3 mb-3" data-bs-toggle="modal" data-bs-target="#appointmentModal" >Make Appointement</button></a>
          </div>
        </div>
        <div class="col-sm-3 centering mt-3 mx-4">
          <p>Our animal care workers are ready to take care of your animals gently with love like : bathing animals,take care of your pet's fur and etc</p>
        </div>  
      </div>
    </div>
  </div>

  <!-- footer -->
    <footer class="container-fluid pt-4 pb-4" style="background: #212529;">
      <div class="container">
        <h4 class="fs-2 fw-semibold centering" style="color: WHITE;">CONNECT WITH US</h4>
        <div class="centering">
          <a href="http://instagram.com/" target="_blank"><span class="iconify" data-icon="fa-brands:instagram-square" style="color: white;" data-width="37" data-height="37"></span></a>
          <a href="http://linkedin.com" target="_blank"><span class="iconify" data-icon="fa-brands:linkedin" style="color: white;" data-width="37" data-height="37 "></span></a>
          <a href="http://twitter.com" target="_blank"><span class="iconify" data-icon="fa-brands:twitter-square" style="color: white;" data-width="37" data-height="37"></span></a>
          <a href="https://github.com/" target="_blank"><span class="iconify" data-icon="fa-brands:github-square" style="color: white;" data-width="37" data-height="37"></span></a>
        </div>
        <div class="container centering mt-2">
          <a href="#"><button class="btn btn-success">Back to Top</button></a>
        </div>
        </div>
    </footer>

  {{-- modal --}}
  <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        @auth
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Appointement Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div  class="modal-body p-4">
          <form method="post" class="row g-3" action="/create1">
            @csrf
            <div class="row">
              <form class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Email</label>
                {{-- <input name="email" type="text" class="form-control" readonly placeholder=" {{ Auth::user()->email }}"> --}}
                <select name="email" type="text" class="form-select" readonly aria-label="Default select example">
                  <option value="{{ Auth::user()->email }}" readonly>{{ Auth::user()->email }}</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Username</label>
                {{-- <input name="user_id" type="text" class="form-control" readonly value="{{ Auth::user()->id }}" placeholder="{{ Auth::user()->name}}"> --}}
                <select name="user_id" type="text" class="form-select" readonly aria-label="Default select example">
                  <option value="{{ Auth::user()->id }}" readonly>{{ Auth::user()->name }}</option>
                </select>
              </div>
              {{-- <div class="mb-3">
                <label class="form-label"><Address></Address></label>
                <input name="address" type="text" class="form-control">
                <div class="form-text">Your Address</div>
              </div>
              <div class="mb-3">
              <label class="form-label">City</label>
                <input name="city" type="text" class="form-control">
                <div class="form-text">Input Your City Name</div>
              </div> --}}
              <div class="mb-3 mt-3">
                <label class="form-label">Phone Number</label>
                <select name="notelp" type="text" class="form-select" readonly aria-label="Default select example">
                  <option value="{{ Auth::user()->notelp }}" readonly>{{ Auth::user()->notelp }}</option>
                </select>
                {{-- <input name="notelp" type="text" class="form-control" value="{{ Auth::user()->notelp }}"> --}}
                <div class="form-text">Input Your Phone Number</div>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Select Services</label>
            <select name="service" class="form-select" aria-label="Default select example">
              @foreach($services as $service)
              <option value="{{ $service->id }}">{{ $service->services_name }}</option>
                @endforeach
          </select>
            </div>
              <div class="mb-3">
                <label class="form-label">Appointment Date</label>
                <input name="app_date" type="date" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Select Session</label>
              <select name="session" class="form-select" aria-label="Default select example">
                @foreach($sessions as $session)
              <option value="{{ $session->id }}">{{ $session->time }}</option>
              @endforeach
            </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Select Branch</label>
                <select name="branch" class="form-select" aria-label="Default select example">
                  @foreach($clinics as $clinic)
                <option value="{{ $clinic->id }}">{{ $clinic->clinic_name }}</option>
                @endforeach
              </select>
              </div>
              <div class="mb-3">
              <label class="form-label">Pet</label>
              <select name="pet_id" class="form-select" aria-label="Default select example">
                @foreach($pets as $pet)
              <option value="{{ $pet->id }}">{{ $pet->pet_name }}</option>
                @endforeach
            </select>
              </div>
              {{-- <div class="mb-3">
              <label class="form-label">Pet Sex</label>
              <select name="petsex" class="form-select" aria-label="Default select example">
              <option value="1">Male</option>
              <option value="2">Female</option>
              </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Pet Ages</label>
                <input name="petages" type="number" class="form-control">
                <div class="form-text">Input Your Pet Ages (Months)</div>
              </div>
              <div class="mb-3">
                <label class="form-label">Pet Weights</label>
                <input name="petweights" type="number" class="form-control">
                <div class="form-text">Input Your Pet Weights (KG).</div>
              </div> --}}
              <div class="mb-3">
              <label class="form-label">Current Complaint</label>
                <textarea name="detail" type="text" class="form-control" cols="30" rows="10"></textarea>
                {{-- <input name="detail" type="text" class="form-control"> --}}
                <div class="form-text">Describe Your Pet's Complaint</div>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        @else
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">You Need to Login First</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="centering p-4">
          <a href="{{ route('login') }}"><button type="submit" class="btn btn-success">Login</button></a>
        </div>
        @endauth   
      </div>
    </div>
  </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jsku.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>
</html>