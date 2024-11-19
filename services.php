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
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./draft.css" />
</head>

<body>
  <!-- Top Bar -->
  <?php include('connect/header.php') ?>

  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px">
      <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">
        Services
      </h4>
      <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
        <li class="breadcrumb-item "><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active text-light">Services</li>
      </ol>
    </div>
  </div>

  <div class="container">
    <section class="prop-service__section banner-section">
      <div class="prop-service__banner">
        <span class="svg-ico banner-oval-yellow mt-5">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 535 445">
            <defs>
              <style>
                .cls-3 {
                  fill: #fcb900;
                }
              </style>
            </defs>
            <path class="cls-3"
              d="M108.87,71.12C277.86,42.67,297.51-51.48,372,37.23,404.49,76,522.52,149,534,201c14.78,66.93-147,126.24-197,168.2-88.85,74.55-206,105.42-270.38,36.9s-126.74-306.52,42.25-335Z" />
          </svg>
        </span>
        <span class="svg-ico banner-oval-blue">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 240">
            <defs>
              <style>
                .cls-2 {
                  fill: #99fcff71;
                }
              </style>
            </defs>
            <g class="cls-1">
              <path class="cls-2"
                d="M616,1V382L458,540a100,100,0,0,1-141.42,0L29.48,252.93a100,100,0,0,1,0-141.42L140,1Z" />
            </g>
          </svg>
        </span>
        <div class="prop-service__banner--graphic">
          <img id="service-image"
            src="https://cdn.staticmb.com/propertyservicestatic/marketplacestatic/images/prop-service-home/banner/v3/home-loans.png"
            alt="Service Graphic">
        </div>

        <div class="prop-service__banner__column">
          <div class="prop-service__banner__title">

            <div class="prop-service__banner__title--text1">
              <h1>V Care U Property Services</h1>
            </div>

          </div>

          <ul class="prop-service__banner__list" id="services-list">
            <li class="prop-service__banner__list--item">
              <a href="#services" data-image="./assets/images/home-loans.png" class="service-link">Housing Loans</a>
            </li>
            <li class="prop-service__banner__list--item">
              <a href="#services" data-image="./assets/images/legal-services.png" class="service-link">Legal Property
                Requirements</a>
            </li>
            <li class="prop-service__banner__list--item">
              <a href="#services" data-image="./assets/images/identification.png" class="service-link">Identification of
                Property</a>
            </li>
            <li class="prop-service__banner__list--item">
              <a href="#services" data-image="./assets/images/documenattion.png" class="service-link">Documentation and
                Registration</a>
            </li>
            <li class="prop-service__banner__list--item">
              <a href="#services" data-image="./assets/images/nri.png" class="service-link">NRI Property
                Requirements</a>
            </li>
            <li class="prop-service__banner__list--item">
              <a href="#services" data-image="./assets/images/legal-title-check.png" class="service-link">Investment in
                Projects</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <div class="container-fluid projects bg-light py-5">
    <div class="container py-5">
      <div class="row g-5">
        <h4 class="services-text text-center">Our Services</h4>
        <h1 class=" mb-0 text-center">We offer a plenty of services for you!!!</h1>

        <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
          <div>

            <ul class="nav">
              <li class="nav-item bg-white mb-4 w-100">
                <a class="d-flex align-items-center h4 mb-0 p-3 active" data-bs-toggle="pill" href="#ProjectsTab-1">
                  <div class="projects-icon btn-md-square  text-white me-3"><span
                      class="fa-solid fa-magnifying-glass"></span></div><span>Identification of Property</span>
                </a>
              </li>
              <li class="nav-item bg-white mb-4 w-100">
                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-2">
                  <div class="projects-icon btn-md-square  text-white me-3"><span class="fa-solid fa-gavel"></span>
                  </div><span>Legal Property Requirements</span>
                </a>
              </li>
              <li class="nav-item bg-white mb-4 w-100">
                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-3">
                  <div class="projects-icon btn-md-square  text-white me-3"><span
                      class="fa-solid fa-house-circle-check"></span></div><span>Housing Loans for Property</span>
                </a>
              </li>
              <li class="nav-item bg-white mb-4 w-100">
                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-4">
                  <div class="projects-icon btn-md-square  text-white me-3"><span class="fa-solid fa-book"></span></div>
                  <span>Documentation and Registration</span>
                </a>
              </li>
              <li class="nav-item bg-white mb-4 w-100">
                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-5">
                  <div class="projects-icon btn-md-square  text-white me-3"><span class="fa-solid fa-plane"></span>
                  </div><span>NRI Property Requirements</span>
                </a>
              </li>
              <li class="nav-item bg-white mb-4 w-100">
                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-6">
                  <div class="projects-icon btn-md-square  text-white me-3"><span class="fa-solid fa-seedling"></span>
                  </div><span>Investment in Projects</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s" id="services">
          <div class="tab-content">
            <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
              <div class="blog-item">
                <div class="blog-img">
                  <img src="./assets/images/pic-1.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="blog-heading ms-4">
                  <a href="#" class="h4 mb-0 p-4">Identification of Property</a>
                </div>
                <div class="blog-content bg-light p-4">
                  <p class="mb-4">At V Care U Property Services, we simplify the process of finding your ideal property.
                    Whether you’re looking for residential or commercial spaces, our team ensures tailored options that
                    align with your preferences and budget. From prime locations to serene neighborhoods, we
                    meticulously analyze market trends and property values to provide you with the best recommendations.
                    Let us guide you in making informed decisions and finding a property that truly feels like home or
                    aligns with your investment goals.
                  </p>

                </div>
              </div>
            </div>
            <div id="ProjectsTab-2" class="tab-pane fade show p-0">
              <div class="blog-item">
                <div class="blog-img">
                  <img src="./assets/images/legal.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="blog-heading ms-4">
                  <a href="#" class="h4 mb-0 p-4">Legal Property Requirements</a>
                </div>
                <div class="blog-content bg-light p-4">
                  <p class="mb-4">Navigating legal property requirements can be challenging, but V Care U Property
                    Services is here to assist. Our team ensures that all properties are verified, legally compliant,
                    and free of disputes. From title verification to compliance with local regulations, we handle every
                    detail with precision. We provide expert guidance on property laws, ensuring your transactions are
                    secure and hassle-free. Trust us to protect your interests while you focus on making the most of
                    your investment.
                  </p>

                </div>
              </div>
            </div>
            <div id="ProjectsTab-3" class="tab-pane fade show p-0">
              <div class="blog-item">
                <div class="blog-img">
                  <img src="./assets/images/housing loans.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="blog-heading ms-4">
                  <a href="#" class="h4 mb-0 p-4">Housing Loans for Property</a>
                </div>
                <div class="blog-content bg-light p-4">
                  <p class="mb-4">At V Care U Property Services, we help you realize your dream of owning a property by
                    assisting with housing loans. Our experts guide you through loan eligibility, application, and
                    approval processes, ensuring smooth transactions. We collaborate with top financial institutions to
                    provide competitive interest rates and flexible repayment options. Whether you're a first-time buyer
                    or upgrading your property, our personalized support makes the journey seamless and stress-free.
                  </p>

                </div>
              </div>
            </div>
            <div id="ProjectsTab-4" class="tab-pane fade show p-0">
              <div class="blog-item">
                <div class="blog-img">
                  <img src="./assets/images/documentation.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="blog-heading ms-4">
                  <a href="#" class="h4 mb-0 p-4">Documentation and Registration</a>
                </div>
                <div class="blog-content bg-light p-4">
                  <p class="mb-4">Ensure a smooth and efficient documentation and registration process with V Care U
                    Property Services. We handle the preparation of sale deeds, agreements, and other critical paperwork
                    with meticulous attention to detail. Our team ensures compliance with all legal and government
                    requirements, saving you time and effort. From document verification to property registration, we
                    simplify the process, giving you complete peace of mind.
                  </p>

                </div>
              </div>
            </div>
            <div id="ProjectsTab-5" class="tab-pane fade show p-0">
              <div class="blog-item">
                <div class="blog-img">
                  <img src="./assets/images/nrioroperty.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="blog-heading ms-4">
                  <a href="#" class="h4 mb-0 p-4">NRI Property Requirements</a>
                </div>
                <div class="blog-content bg-light p-4">
                  <p class="mb-4">V Care U Property Services specializes in catering to Non-Resident Indians (NRIs)
                    looking to invest in or manage properties in India. We provide end-to-end services, from property
                    selection to legal compliance and documentation. Our team addresses unique NRI challenges, such as
                    tax implications, power of attorney, and property maintenance. Trust us to safeguard your
                    investments and provide comprehensive solutions tailored to your requirements.
                  </p>

                </div>
              </div>
            </div>
            <div id="ProjectsTab-6" class="tab-pane fade show p-0">
              <div class="blog-item">
                <div class="blog-img">
                  <img src="./assets/images/investment.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="blog-heading ms-4">
                  <a href="#" class="h4 mb-0 p-4">Investment in Projects</a>
                </div>
                <div class="blog-content bg-light p-4">
                  <p class="mb-4">Maximize your returns by investing in lucrative projects with V Care U Property
                    Services. We bring you exclusive opportunities in residential, commercial, and mixed-use
                    developments. Our experts analyze market trends, project feasibility, and potential ROI to help you
                    make informed decisions. Whether you're a seasoned investor or exploring new ventures, our strategic
                    insights and professional guidance ensure your investments yield optimal results.
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include('connect/footer.php') ?>

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
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const serviceLinks = document.querySelectorAll(".service-link");
    const serviceImage = document.getElementById("service-image");

    serviceLinks.forEach(link => {
      // Hover to change the image
      link.addEventListener("mouseover", function () {
        const newImage = this.getAttribute("data-image");
        serviceImage.setAttribute("src", newImage);
      });

      // Click to redirect and highlight active link
      link.addEventListener("click", function () {
        serviceLinks.forEach(link => link.classList.remove("active"));
        this.classList.add("active");

        // Redirect to the link's href
        window.location.href = this.href;
      });
    });
  });</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>