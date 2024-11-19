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

    <style>
        /* Property Card */
        .property-card {
            display: flex;
            background: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            position: relative;
        }

        /* Carousel */
        .carousel {
            position: relative;
            width: 250px;
            height: 250px;
            overflow: hidden;
            border-radius: 5px;
        }

        .carousel .carousel-images {
            display: flex;
            width: 100%;
            height: 100%;
            animation: slide 9s infinite;
        }

        .carousel .carousel-images img {
            width: 100%;
            height: 100%;
            flex-shrink: 0;
            object-fit: cover;
        }

        /* Badges */
        .carousel .badges {
            position: absolute;
            top: 10px;
            left: 10px;
            display: flex;
            gap: 5px;
            z-index: 10;
        }

        .carousel .badge {
            padding: 5px 10px;
            font-size: 12px;
            color: white;
            border-radius: 3px;
            font-weight: bold;
        }

        .carousel .badge.rera {
            background-color: #28a745;
            /* Green for RERA */
        }

        .carousel .badge.featured {
            background-color: #007bff;
            /* Blue for Featured */
        }

        /* Slide Animation */
        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            33% {
                transform: translateX(-100%);
            }

            66% {
                transform: translateX(-200%);
            }

            100% {
                transform: translateX(0);
            }
        }

        /* Details */
        .property-card .details {
            margin-left: 20px;
        }

        .property-card .details h3 {
            margin: 0;
        }

        .property-card .details p {
            margin: 5px 0;
        }

        .property-card .btn {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .property-card .btn.secondary {
            background-color: #28a745;
        }


        .container {
            display: flex;
            margin: 20px;
        }

        /* Sidebar */
        .sidebar {
            width: 25%;
            border-right: 1px solid #ddd;
            padding: 20px;
        }

        .sidebar h3 {
            margin-top: 0;
        }

        .filter-group {
            margin-bottom: 20px;
        }

        .range-labels {
            display: flex;
            justify-content: space-between;
        }

        /* Property List */
        .property-list {
            width: 75%;
            padding: 20px;
        }

        .property-card {
            display: flex;
            background: #f9f9f9;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 5px;
        }



        .property-card .details h3 {
            margin: 0;
        }

        .property-card .details p {
            margin: 5px 0;
        }

        .property-card .btn {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .property-card .btn.secondary {
            background-color: #28a745;
        }

        /* Navbar */
        .navbar {
            background-color: ;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .search-form {
            display: flex;
            align-items: end;
            margin-left:
                190px;
            width: 50%;
            gap: 10px;
        }

        /* Search Input */
        .search-input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 25px;
            font-size: 16px;
            outline: none;
        }

        /* Voice Search Button */
        .btn-voice {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
        }

        .btn-voice i {
            pointer-events: none;
        }

        /* Search Button */
        .btn-search {
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-search:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <?php include('connect/header.php') ?>
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <!-- Search Form -->
            <form class="d-flex search-form">
                <input class="form-control search-input" type="text" placeholder="Search here..." aria-label="Search" />
                <button type="button" class="btn btn-voice">
                    <i class="fas fa-microphone"></i>
                </button>
                <button type="submit" class="btn btn-search">
                    Search
                </button>
            </form>
        </div>
    </nav>

    <div class="container">
        <!-- Sidebar Filters -->
        <aside class="sidebar">
            <h3>Filters</h3>
            <div class="filters">
                <h4>Filters</h4>
                <div class="filter-group">
                    <label for="budget">Budget:</label>
                    <select id="budget">
                        <option value="any">Any</option>
                        <option value="0-50L">0 - 50L</option>
                        <option value="50L-1Cr">50L - 1Cr</option>
                        <option value="1Cr+">1Cr+</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="property-type">Property Type:</label>
                    <select id="property-type">
                        <option value="all">All</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="plot">Plot</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="location">Location:</label>
                    <select id="location">
                        <option value="all">All Locations</option>
                        <option value="chennai-south">Chennai South</option>
                        <option value="chennai-north">Chennai North</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <button class="btn apply-filters">Apply Filters</button>
            </div>
        </aside>

        <!-- Property Cards -->
        <main class="property-list">
            <h2>Properties in Chennai South</h2>
            <div class="property-card">
                <div id="image-carousel" class="carousel">
                    <!-- Badges -->
                    <div class="badges">
                        <span class="badge rera">RERA</span>
                        <span class="badge featured">Featured</span>
                    </div>
                    <!-- Carousel Images -->
                    <div class="carousel-images">
                        <img src="https://via.placeholder.com/300x200" alt="Image 1">
                        <img src="https://via.placeholder.com/300x200/ff0000" alt="Image 2">
                        <img src="https://via.placeholder.com/300x200/00ff00" alt="Image 3">
                    </div>
                </div>
                <div class="details">
                    <h3>Kapaleeswar Nagar</h3>
                    <p>₹6.5 Cr | 4,800 sqft | Plot/Land</p>
                    <p><strong>Highlights:</strong> East Facing, Overlooking Main Road</p>
                    <p>A residential plot for sale in Neelankarai, Chennai.</p>
                    <button class="btn">View Number</button>
                    <button class="btn secondary">Contact</button>
                </div>
            </div>

            <div class="property-card">
                <div id="image-carousel" class="carousel">
                    <!-- Badges -->
                    <div class="badges">
                        <span class="badge rera">RERA</span>
                        <span class="badge featured">Featured</span>
                    </div>
                    <!-- Carousel Images -->
                    <div class="carousel-images">
                        <img src="https://via.placeholder.com/300x200" alt="Image 1">
                        <img src="https://via.placeholder.com/300x200/ff0000" alt="Image 2">
                        <img src="https://via.placeholder.com/300x200/00ff00" alt="Image 3">
                    </div>
                </div>
                <div class="details">
                    <h3>Kapaleeswar Nagar</h3>
                    <p>₹6.5 Cr | 4,800 sqft | Plot/Land</p>
                    <p><strong>Highlights:</strong> East Facing, Overlooking Main Road</p>
                    <p>A residential plot for sale in Neelankarai, Chennai.</p>
                    <button class="btn">View Number</button>
                    <button class="btn secondary">Contact</button>
                </div>
            </div>
            <div class="property-card">
                <div id="image-carousel" class="carousel">
                    <!-- Badges -->
                    <div class="badges">
                        <span class="badge rera">RERA</span>
                        <span class="badge featured">Featured</span>
                    </div>
                    <!-- Carousel Images -->
                    <div class="carousel-images">
                        <img src="https://via.placeholder.com/300x200" alt="Image 1">
                        <img src="https://via.placeholder.com/300x200/ff0000" alt="Image 2">
                        <img src="https://via.placeholder.com/300x200/00ff00" alt="Image 3">
                    </div>
                </div>
                <div class="details">
                    <h3>Kapaleeswar Nagar</h3>
                    <p>₹6.5 Cr | 4,800 sqft | Plot/Land</p>
                    <p><strong>Highlights:</strong> East Facing, Overlooking Main Road</p>
                    <p>A residential plot for sale in Neelankarai, Chennai.</p>
                    <button class="btn">View Number</button>
                    <button class="btn secondary">Contact</button>
                </div>
            </div>
            <div class="property-card">
                <div id="image-carousel" class="carousel">
                    <!-- Badges -->
                    <div class="badges">
                        <span class="badge rera">RERA</span>
                        <span class="badge featured">Featured</span>
                    </div>
                    <!-- Carousel Images -->
                    <div class="carousel-images">
                        <img src="https://via.placeholder.com/300x200" alt="Image 1">
                        <img src="https://via.placeholder.com/300x200/ff0000" alt="Image 2">
                        <img src="https://via.placeholder.com/300x200/00ff00" alt="Image 3">
                    </div>
                </div>
                <div class="details">
                    <h3>Kapaleeswar Nagar</h3>
                    <p>₹6.5 Cr | 4,800 sqft | Plot/Land</p>
                    <p><strong>Highlights:</strong> East Facing, Overlooking Main Road</p>
                    <p>A residential plot for sale in Neelankarai, Chennai.</p>
                    <button class="btn">View Number</button>
                    <button class="btn secondary">Contact</button>
                </div>
            </div>
        </main>
    </div>