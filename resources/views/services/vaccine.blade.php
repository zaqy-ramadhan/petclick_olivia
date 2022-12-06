  @extends('homeassets')

  @section('content')
  {{-- banner --}}
  <div class="parallax-consultation d-flex justify-content-center align-items-center">
    <div class="container banner-content col-lg-6 position-absolute">
      <h2 class="fs-1 fw-semibold">HEALTH CHECK & VACCINATIONS</h2>
    </div>
  </div>

  {{-- desc --}}
  <div class="container centering mt-5">
    <div class="container m-5">
      <div class="container">
        <p style="text-align: center">Medical check-up is a comprehensive health examination. Through this examination, it is hoped that a disease or health problem can be detected early. This test is also useful for planning appropriate treatment and treatment methods before disease develops and Animal vaccination is vaccination or administration of vaccines to animals to help the animal's immune system develop protection against infectious diseases.</p>

      </div>
      <div class="row m-5 centering">
        <div class="col-sm-3 centering mt-3 mx-4">
          <div class="card shadow" style="width: 18rem; border-radius: 17px;">
            <img src="https://cdn-prd.content.metamorphosis.com/wp-content/uploads/sites/2/2021/03/shutterstock_1503829781-1-768x512.jpg" class="card-img-top" alt="grooming" style="border-radius: 17px;">
            <div class="card-body">
              <h5 class="card-title" style="color: #323D51">Healtch Check & Vaccinations</h5>
            </div>
            <a><button class="btn btn-success ms-3 mb-3" data-bs-toggle="modal" data-bs-target="#appointmentModal">Make Appointement</button></a>
          </div>
        </div>
        <div class="col-sm-3 centering mt-3 mx-4">
          <p>We are ready to provide health checks and vaccinations for your animals. Vaccinations in our pet shop include rabies vaccine, parvovirus vaccine, parainfluenza vaccine, leptospirosis vaccine and etc. Our health checks are very credible and valid if your animal has an undetected disease because we have sophisticated tools to detect animal diseases</p>
        </div>  
      </div>
    </div>
  </div>
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
                  <select name="email" type="text" class="form-select" readonly aria-label="Default select example">
                    <option value="{{ Auth::user()->email }}" readonly>{{ Auth::user()->email }}</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label">Username</label>
                  <select name="user_id" type="text" class="form-select" readonly aria-label="Default select example" required>
                    <option value="{{ Auth::user()->id }}" readonly>{{ Auth::user()->name }}</option>
                  </select>
                </div>
                <div class="mb-3 mt-3">
                  <label class="form-label">Phone Number</label>
                  <select name="notelp" type="text" class="form-select" readonly aria-label="Default select example">
                    <option value="{{ Auth::user()->notelp }}" readonly>{{ Auth::user()->notelp }}</option>
                  </select>
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
                  <input name="app_date" type="date" class="form-control" required>
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
                <div class="mb-3">
                <label class="form-label">Current Complaint</label>
                  <textarea name="detail" type="text" class="form-control" cols="30" rows="10" required></textarea>
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
 @endsection