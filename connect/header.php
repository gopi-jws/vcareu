<?php
$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = explode('/', trim($url_path, '/'));

$last_segment = end($segments);


$path = $_SERVER['REQUEST_URI'];

$service = false;
if (strpos($path, 'services-') !== false) {
    $service = true;
}
?>
<div class="top-bar">
    <div class="container d-flex justify-content-between">
        <!-- Empty Left Side -->
        <div></div>

        <!-- Right Side with Contact Info and Social Icons -->
        <div class="top-bar-right">
            <span><i class="fas fa-envelope"></i>
                info@vcareupropertyservices.com</span>
            <span class="separator">|</span>
            <span><i class="fas fa-phone"></i> +91 9840431794</span>
            <span class="separator">|</span>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-light-sticky bg-light navbar-custom">
        <div class="navbar-brand">
            <a href="#">
                <img src="./assets/images/logo-f.png" alt="Logo" />
            </a>
            <div class="navbar-brand-text">
                <h4>V CARE U Property Services</h4>
                <div class="separator-line"></div>
                <p>Identification to Occupation</p>
            </div>
        </div>
        <div class="collapse navbar-collapse nav-menu" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php" id="buyDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Buy
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="buyDropdown">
                        <li>
                            <a class="dropdown-item" href="buy.php">Apartments</a>
                        </li>
                        <li><a class="dropdown-item" href="index.php">Individual houses</a></li>
                        <li><a class="dropdown-item" href="index.php">Vacant Land</a></li>
                        <li><a class="dropdown-item" href="index.php">Commercial</a></li>
                        <li>
                            <a class="dropdown-item" href="index.php">Villa</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="sellDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Sell
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sellDropdown">
                        <li><a class="dropdown-item" href="sell.php">Post Property</a></li>
                        <li><a class="dropdown-item" href="ad-pakages.php">Ad packages</a></li>
                        <li><a class="dropdown-item" href="#">Sales enquiry</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <!-- Help dropdown with nested items -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="helpDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Help
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="helpDropdown">
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                        <li><a class="dropdown-item" href="#">Sales enquiry</a></li>
                    </ul>
                </li>
            </ul>
            <div>
                <button class="btn-login button-wow" type="button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Search property
                </button>
            </div>
        </div>
    </nav>
</header>