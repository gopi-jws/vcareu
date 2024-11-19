<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>V Care U Property Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Quattrocento:wght@400;700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <!-- Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/responsive.css" />


</head>

<body>
  <!-- Top Bar -->
  <?php include('connect/header.php') ?>

  <!-- Slider -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/images/slider1.jpg" class="d-block w-100" alt="Slide 1" />

        <div class="overlay">
          <div class="outer-circle">
            <div class="inner-circle">
              <span class="overlay-text">
                <h1>Home is where your
                  <br>heart unfolds
                </h1>
              </span>
            </div>
          </div>

        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/images/slider2.jpg" class="d-block w-100" alt="Slide 2" />
        <div class="overlay">
          <div class="outer-circle">
            <div class="inner-circle">
              <span class="overlay-text">
                <h1>Property Services <br> Identification to Occupation</h1>
              </span>
            </div>
          </div>

        </div>

      </div>
      <div class="carousel-item">
        <img src="./assets/images/slider3.jpg" class="d-block w-100" alt="Slide 3" />
        <div class="overlay">
          <div class="outer-circle">
            <div class="inner-circle">
              <span class="overlay-text">
                <h1>Trusted, Dedicated <br>and Dependable Services</h1>
              </span>
            </div>
          </div>

        </div>

      </div>
    </div>

    <!-- Controls for Carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

    <!-- Form Container (Stays Same Across Slides) -->
    <section class="services-section">
      <div class="container-xxl py-5">
        <div class="container">
          <!-- Section Title -->
          <div class="mb-5" style="max-width: 600px">
            <h2 class="recommended-title1 half-underline mb-0">Services Offered</h2>
            <p class="mt-2">We offer a plenty of services</p>
          </div>

          <!-- Cards Section -->
          <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-6 col-md-6">
              <div class="service-item d-flex align-items-center h-100">
                <img src="./assets/images/pic-1.jpg" alt="Image 1" class="card-img-left">
                <div class="service-text p-4">
                  <h5 class="card-title">Identification of Property</h5>
                  <p>Find the ideal property that meets all your requirements.</p>
                  <a class="btn btn-know" href="services.php"><i class="fa fa-plus text-white me-2"></i>Know More</a>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-6 col-md-6">
              <div class="service-item d-flex align-items-center h-100">
                <img src="./assets/images/legal.jpg" alt="Image 2" class="card-img-left">
                <div class="service-text p-4">
                  <h5 class="card-title">Legal Property Requirements</h5>
                  <p>Ensure compliance with all property regulations and legalities.</p>
                  <a class="btn btn-know" href="services.php"><i class="fa fa-plus text-white me-2"></i>Know More</a>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-6 col-md-6">
              <div class="service-item d-flex align-items-center h-100">
                <img src="./assets/images/housing loans.jpg" alt="Image 3" class="card-img-left">
                <div class="service-text p-4">
                  <h5 class="card-title">Housing Loans for Property</h5>
                  <p>Access housing loans to help secure your property investments.</p>
                  <a class="btn btn-know" href="services.php"><i class="fa fa-plus text-white me-2"></i>Know More</a>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-6 col-md-6">
              <div class="service-item d-flex align-items-center h-100">
                <img src="./assets/images/documentation.jpg" alt="Image 4" class="card-img-left">
                <div class="service-text p-4">
                  <h5 class="card-title">Documentation and Registration</h5>
                  <p>Complete all necessary documentation and registration tasks.</p>
                  <a class="btn btn-know" href="services.php"><i class="fa fa-plus text-white me-2"></i>Know More</a>
                </div>
              </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-6 col-md-6">
              <div class="service-item d-flex align-items-center h-100">
                <img src="./assets/images/nrioroperty.jpg" alt="Image 5" class="card-img-left">
                <div class="service-text p-4">
                  <h5 class="card-title">NRI Property Requirements</h5>
                  <p>Specialized services tailored to NRI property requirements.</p>
                  <a class="btn btn-know" href="services.php"><i class="fa fa-plus text-white me-2"></i>Know More</a>
                </div>
              </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-6 col-md-6">
              <div class="service-item d-flex align-items-center h-100">
                <img src="./assets/images/investment.jpg" alt="Image 6" class="card-img-left">
                <div class="service-text p-4">
                  <h5 class="card-title">Investment in Projects</h5>
                  <p>Discover investment opportunities in promising projects.</p>
                  <a class="btn btn-know" href="services.php"><i class="fa fa-plus text-white me-2"></i>Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Service End -->

    <section class="full-width-section">
      <h2 class="recommended-title half-underline ">
        Search by Property Requirements
      </h2>
      <p class="recommended-para">Search property which is suitable for you</p>
      <div class="card-section">
        <div class="cards-wrapper" id="carouselSlides">
          <div class="card1">
            <img src="./assets/images/img/house2.jpg" alt="Image 1" class="card-img" />
            <div class="card-content">
              <div class="text main-text1">Apartments</div>
              <div class="text main-text">4 Properties</div>
              <div class="text hover-text">View Details -></div>
            </div>
          </div>
          <div class="card1">
            <img src="./assets/images/img/house2.jpg" alt="Image 2" class="card-img" />
            <div class="card-content">
              <div class="text main-text1">Individual house</div>
              <div class="text main-text">4 Properties</div>
              <div class="text hover-text">View Details -></div>
            </div>
          </div>
          <div class="card1">
            <img src="./assets/images/img/house3.jpg" alt="Image 3" class="card-img" />
            <div class="card-content">
              <div class="text main-text1">Vacant Land</div>
              <div class="text main-text">5 Properties</div>
              <div class="text hover-text">View Details -></div>
            </div>
          </div>
          <div class="card1">
            <img src="./assets/images/img/house3.jpg" alt="Image 4" class="card-img" />
            <div class="card-content">
              <div class="text main-text1">Commercial</div>
              <div class="text main-text">6 Properties</div>
              <div class="text hover-text">View Details -></div>
            </div>
          </div>
          <div class="card1">
            <img src="./assets/images/img/house3.jpg" alt="Image 5" class="card-img" />
            <div class="card-content">
              <div class="text main-text1">Villa</div>
              <div class="text main-text">2 Properties</div>
              <div class="text hover-text">View Details -></div>
            </div>
          </div>
          <!-- Add additional cards here up to 6 cards -->
        </div>

        <!-- Navigation dots -->
      </div>
    </section>
    <section class="post-section">
      <div class="container-fluid property-register">
        <div class="left-content">
          <h2 class="half-underline">Register to post your property</h2>
          <h4>SELL YOUR PROPERTY</h4>
          <div class="plus-content">
            <div class="plus">
              <h1>10L+</h1>
              <span>Property Listings</span>
            </div>
            <div class="plus">
              <h1>45L+</h1>
              <span>Monthly Searches</span>
            </div>
            <div class="plus">
              <h1>2L+</h1>
              <span>Owners advertise monthly</span>
            </div>
          </div>
          <button class="btn btn-login hover-btn register-button">
            Post your property
          </button>
        </div>
        <div class="right-content">
          <img src="./assets/images/d_hp_ppf_xl2.webp" alt="Property Image" />
        </div>
      </div>
    </section>


    <!-- Apartment villa and More section Start -->
    <section class="apartment-gallery">
      <div class="aparatment-container">
        <h2 class="recommended-title half-underline mt-4">
          Apartments, Villas & More
        </h2>
        <p class="recommended-para">Explore More in Your Location</p>
        <div class="image-card-slider">
          <div class="image-card" data-id="1">
            <picture>
              <img src="./assets/images/img/house1.jpg" alt="Residential Land" title="Residential Land" />
              <div class="imagecard-overlay">
                <div class="image-card-title">Residential Land</div>
                <div class="image-card-info">7,100+ Properties</div>
              </div>
            </picture>
          </div>

          <div class="image-card" data-id="1">
            <picture>
              <img src="./assets/images/img/house2.jpg" alt="Residential Land" title="Residential Land" />
              <div class="imagecard-overlay">
                <div class="image-card-title">Residential Land</div>
                <div class="image-card-info">7,100+ Properties</div>
              </div>
            </picture>
          </div>

          <div class="image-card" data-id="1">
            <picture>
              <img src="./assets/images/img/house3.jpg" alt="Residential Land" title="Residential Land" />
              <div class="imagecard-overlay">
                <div class="image-card-title">Residential Land</div>
                <div class="image-card-info">7,100+ Properties</div>
              </div>
            </picture>
          </div>

          <div class="image-card" data-id="1">
            <picture>
              <img src="./assets/images/img/house4.jpg" alt="Residential Land" title="Residential Land" />
              <div class="imagecard-overlay">
                <div class="image-card-title">Residential Land</div>
                <div class="image-card-info">7,100+ Properties</div>
              </div>
            </picture>
          </div>

          <div class="image-card" data-id="1">
            <picture>
              <img src="./assets/images/img/house5.jpg" alt="Residential Land" title="Residential Land" />
              <div class="imagecard-overlay">
                <div class="image-card-title">Residential Land</div>
                <div class="image-card-info">7,100+ Properties</div>
              </div>
            </picture>
          </div>

          <div class="image-card" data-id="1">
            <picture>
              <img src="./assets/images/img/house6.jpg" alt="Residential Land" title="Residential Land" />
              <div class="imagecard-overlay">
                <div class="image-card-title">Residential Land</div>
                <div class="image-card-info">7,100+ Properties</div>
              </div>
            </picture>
          </div>
        </div>
      </div>
    </section>

    <!-- Apartment Villa and More section end -->
    <?php include('connect/footer.php') ?>

    <!-- projects Section start -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>