<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 - Transparent Navbar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
      .banner-image {
        background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1596272875729-ed2ff7d6d9c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        height: 97vh;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }

    .fb-parallax{
        height: 100%;
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1553688738-a278b9f063e0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .centering{
        display: flex;
        justify-content: center;
    }
    </style>



  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
      <div class="container">
        <a href="#"><img class="img-fluid" src="{{ URL::to('/assets/petclick_logo-light.png') }}" style="width: 100px"></a>
        {{-- <a class="navbar-brand" href="#">PetClick</a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
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
              <li class="nav-item">
                <a class="nav-link me-2" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a {{-- target="_blank" --}} href="/log" ><button type="button" class="btn btn-success rounded-pill">Login / Register</button></a>
              </li>
            </ul>
          </div>
      </div>
    </nav>

    <!-- Banner Image  -->
    <div class="banner-image d-flex justify-content-center align-items-center">
        <div class="container banner-content col-lg-6 position-absolute top-50 start-50 translate-middle">
            <div class="text-center" style="color: white">
              <p class="fs-1 fw-semibold">
                We Care About Your Pets
              </p>
              <p class="d-none d-md-block fw-normal">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, praesentium.
              </p>
              <a href="/form"><button type="button" class="btn btn-success rounded">Make Appointement</button></a>
            </div>
          </div>
    </div>

    {{-- about --}}
    <div id="about" class="container-fluid mt-5 mb-5" style="text-align: center">
        <p class="fs-1 fw-bolder" style="color: #016734;">ABOUT US</p>
        <div class="container p-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda hic quia sit nulla impedit repudiandae facere eos maiores recusandae possimus numquam voluptate neque tempore temporibus alias placeat id sint, omnis modi necessitatibus. Assumenda placeat cum doloribus incidunt ea labore obcaecati laborum earum repellendus architecto nihil, modi enim, quisquam dolor a itaque culpa alias nemo. Praesentium modi ipsum expedita beatae deleniti debitis ipsa. Perferendis, dolorem eos debitis itaque facilis commodi modi quaerat eum natus ut, sit laboriosam provident consectetur vitae voluptatibus quos! Numquam consequuntur explicabo nihil ducimus ipsum! Autem, soluta vitae similique consequuntur quae ratione illo vel, laboriosam accusantium aspernatur temporibus.</p>
        </div>
      </div>

      {{-- services --}}
      <div id="services" class="container-fluid fb-parallax centering">
        <div class="container m-5">
            <p class="fs-1 fw-bolder centering" style="color: white;">OUR SERVICES</p>
            <div class="row m-5 centering">
    
                <div class="col-sm-3 centering mt-2">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="https://cdn-prd.content.metamorphosis.com/wp-content/uploads/sites/2/2021/03/shutterstock_1503829781-1-768x512.jpg" class="card-img-top" alt="grooming">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #323D51">Healtch Check & Vaccinations</h5>
                          <p class="card-text" style="color: #323D51">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-success">See details</a> --}}
                        </div>
                        <a href="#" class="btn btn-success">See details</a>
                      </div>
                </div>
    
                <div class="col-sm-3 centering mt-2">
                  <div class="card shadow" style="width: 18rem;">
                      <img src="https://d2zp5xs5cp8zlg.cloudfront.net/image-42128-800.jpg" class="card-img-top" alt="grooming">
                      <div class="card-body">
                        <h5 class="card-title" style="color: #323D51">Surgery</h5>
                        <p class="card-text" style="color: #323D51">Surgery: Performing operations as required including neutering, dentals, lump removals and referring on to specialists as required.</p>
                        {{-- <a href="#" class="btn btn-success">See details</a> --}}
                      </div>
                      <a href="#" class="btn btn-success">See details</a>
                    </div>
              </div>
    
                <div class="col-sm-3 centering mt-2">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="grooming">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #323D51">Grooming</h5>
                          <p class="card-text" style="color: #323D51">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-success">See details</a> --}}
                        </div>
                        <a href="#" class="btn btn-success">See details</a>
                      </div>
                </div>
    
                <div class="col-sm-3 centering mt-2">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="https://www.westerncape.gov.za/sites/www.westerncape.gov.za/files/boy-with-dog-at-vet.jpg" alt="grooming">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #323D51">Consultation</h5>
                          <p class="card-text" style="color: #323D51">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-success">See details</a> --}}
                        </div>
                        <a href="#" class="btn btn-success">See details</a>
                      </div>
                </div>
            </div>
        </div>
      </div>

      <script src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        var nav = document.querySelector('nav');
  
        window.addEventListener('scroll', function () {
          if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
          } else {
            nav.classList.remove('bg-dark', 'shadow');
          }
        });
      </script>

  </body>
</html>