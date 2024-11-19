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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./draft.css">
    <link rel="stylesheet" href="./new.css">

</head>

<body>
    <!-- Top Bar -->
    <?php include('connect/header.php') ?>

    <div class="container">
    <div class="submit-page">

        <!-- Section -->
        <div class="tb_left_heading_wraper add_listing_head">
            <h3>Basic Information</h3>
        </div>
        <div class="submit-section checkout-form">
            <!-- Title -->
            <div class="row with-forms">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="field-label">Property Title</div>
                    <input type="text" name="field-name" value="" placeholder="">
                </div>

                <!-- Status -->
                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <div class="field-label">Status</div>
                    <select>
                        <option>For Rent</option>
                        <option>For Sale</option>
                    </select>
                </div>

                <!-- Type -->
                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <div class="field-label">Type</div>
                    <select>
                        <option>Apartment</option>
                        <option>House</option>
                        <option>Commercial</option>
                        <option>Garage</option>
                    </select>
                </div>
            </div>

            <!-- Price -->
            <div class="row with-forms">
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">Price ($)</div>
                    <input type="text" name="field-name" value="" placeholder="Please enter price..">
                </div>

                <!-- Area -->
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">Area</div>
                    <input type="text" name="field-name" value="" placeholder="Sq Ft">
                </div>

                <!-- Rooms -->
                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <div class="field-label">Rooms</div>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <!-- Bathrooms -->
                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                    <div class="field-label">Bathrooms</div>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="tb_left_heading_wraper add_listing_head">
            <h3>Gallery</h3>
        </div>
        <div class="submit-section">
            <div class="galerypost">
                <div class="drag">
                    <h2>Drag &amp; drop files here …</h2>
                </div>
                <div class="custom-input">
                    <span><i class="fa fa-upload"></i> &nbsp;Upload Photo</span>
                    <input type="file" name="resume" id="resume">
                </div>
            </div>
        </div>

        <!-- Location Section -->
        <div class="tb_left_heading_wraper add_listing_head">
            <h3>Location</h3>
        </div>
        <div class="submit-section checkout-form">
            <div class="row with-forms">
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">Address</div>
                    <input type="text" name="field-name" value="" placeholder="Enter address..">
                </div>

                <!-- City -->
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">City</div>
                    <input type="text" name="field-name" value="" placeholder="Enter city..">
                </div>

                <!-- State -->
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">State</div>
                    <input type="text" name="field-name" value="" placeholder="Enter state..">
                </div>

                <!-- Zip-Code -->
                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">Zip-Code</div>
                    <input type="text" name="field-name" value="" placeholder="Enter Zipcode..">
                </div>
            </div>
        </div>

        <!-- Detailed Information Section -->
        <div class="tb_left_heading_wraper add_listing_head">
            <h3>Detailed Information</h3>
        </div>
        <div class="submit-section checkout-form gga">
            <div class="row with-forms">
                <!-- Description -->
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="field-label">Description</div>
                    <textarea class="WYSIWYG" placeholder="Plan description.."></textarea>
                </div>

                <!-- Age of Home -->
                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                    <div class="field-label">Building Age <span>(optional)</span></div>
                    <select>
                        <option>0 - 1 Years</option>
                        <option>0 - 5 Years</option>
                        <option>0 - 10 Years</option>
                        <option>0 - 20 Years</option>
                        <option>0 - 50 Years</option>
                        <option>50+ Years</option>
                    </select>
                </div>

                <!-- Beds -->
                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                    <div class="field-label">Bedrooms<span>(optional)</span></div>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <!-- Baths -->
                <div class="form-group col-md-4 col-sm-12 col-xs-12">
                    <div class="field-label">Bathrooms<span>(optional)</span></div>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Amenities Section -->
        <div class="tb_left_heading_wraper add_listing_head">
            <h3>Amenities &amp; Features</h3>
        </div>
        <div class="submit-section checkout-form">
            <div class="checkboxes in-row">
                <div class="check_list">
                    <input id="check-1" type="checkbox" name="check">
                    <label for="check-1">Air Conditioning</label>
                </div>
                <div class="check_list">
                    <input id="check-2" type="checkbox" name="check">
                    <label for="check-2">Swimming Pool</label>
                </div>
                <div class="check_list">
                    <input id="check-3" type="checkbox" name="check">
                    <label for="check-3">Central Heating</label>
                </div>
                <div class="check_list">
                    <input id="check-4" type="checkbox" name="check">
                    <label for="check-4">Laundry Room</label>
                </div>
                <div class="check_list">
                    <input id="check-5" type="checkbox" name="check">
                    <label for="check-5">Gym</label>
                </div>
                <div class="check_list">
                    <input id="check-6" type="checkbox" name="check">
                    <label for="check-6">Alarm</label>
                </div>
                <div class="check_list">
                    <input id="check-7" type="checkbox" name="check">
                    <label for="check-7">Window Covering</label>
                </div>
                <div class="check_list">
                    <input id="check-8" type="checkbox" name="check">
                    <label for="check-8">Golf Course</label>
                </div>
                <div class="check_list">
                    <input id="check-9" type="checkbox" name="check">
                    <label for="check-9">Wet Bar</label>
                </div>
            </div>
        </div>

        <!-- Contact Details Section -->
        <div class="tb_left_heading_wraper add_listing_head">
            <h3>Contact Details</h3>
        </div>
        <div class="submit-section checkout-form">
            <div class="row with-forms">
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="field-label">Name</div>
                    <input type="text" name="field-name" value="" placeholder="Your name..">
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">Email</div>
                    <input type="text" name="field-name" value="" placeholder="Your email..">
                </div>

                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <div class="field-label">Phone</div>
                    <input type="text" name="field-name" value="" placeholder="Your number..">
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="shop_btn_wrapper chackout_login_btn">
                        <ul>
                            <li><a href="#">Add Property</a></li>
                        </ul>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>