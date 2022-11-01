<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Appointement - Petclick</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/cssku.css">
</head>
<body class="bg-dark">

<nav class="navbar navbar-expand-lg navbar-dark sticky-top p-3">
    <div class="container">
        <a href="/"><img class="img-fluid" src="{{ URL::to('/assets/petclick_logo-light.png') }}" style="width: 100px"></a>
        {{-- <a class="navbar-brand" href="#">PetClick</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse righting" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-tem">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-tem">
            <a class="nav-link" href="#location">Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
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
                              <a class="dropdown-item" href="/myappointment">My Appointement</a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </li>
                      @else
                          <li class="nav-item ms-2">
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
  
  <div class="container">
      <div class="card" style="height: 85vh">
      <div class="card-body">
        
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  {{-- <script src="js/bootstrap.js"></script> --}}
  <script src="js/jsku.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>
</html>