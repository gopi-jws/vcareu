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
    <section class="main-sell">
        <div class="sell-property-action-container">
            <h1 class="sell-property-heading">Post Your property Details</h1>
            <div class="sell-property-redirect">
                <span>Looking for a propertys?</span>
                <a class="property-link" href="/">Click Here</a>
            </div>
        </div>
        <section class="sell-prperty">


            <div class="form-container">
                <form class="property-form" action="#" method="post">

                    <!-- Row 1: Name and Email -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name="name" class="sell-form-field" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="sell-form-field" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <!-- Row 2: Phone Number and City -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="sell-form-field" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <select id="city" name="city" class="sell-form-field" required>
                                <option value="" disabled selected>Select your city</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Pune">Pune</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Jaipur">Jaipur</option>
                            </select>
                        </div>

                    </div>

                    <!-- WhatsApp Updates -->
                    <div class="updates-container">
                        <div class="updates-text">
                            Get updates on
                            <svg xmlns="http://www.w3.org/2000/svg" class="whatsapp-icon" viewBox="0 0 48 48">
                                <g>
                                    <path fill="#40C351" d="M35.175 12.832C32.195 9.852 28.234 8.207 24.02 8.207c-8.704 0-15.785 7.074-15.789 15.773 0 2.98.836 5.883 2.414 8.395l.375.598-1.594 5.821 5.973-1.566.578.344c2.422 1.438 5.199 2.199 8.031 2.199h.008c8.695 0 15.773-7.078 15.777-15.777 0-4.215-1.64-8.18-4.621-11.16z"></path>
                                    <path fill="#FFF" d="M19.27 16.047c-.355-.793-.73-.809-1.07-.82-.277-.012-.594-.012-.91-.012s-.828.118-1.261.594c-.438.473-1.664 1.621-1.664 3.957 0 2.332 1.703 4.59 1.937 4.906.238.312 3.285 5.257 8.106 7.16 4.008 1.578 4.824 1.266 5.691 1.188.87-.082 2.808-1.148 3.202-2.258.395-1.105.395-2.054.277-2.254-.117-.2-.433-.316-.91-.554-.472-.239-2.804-1.383-3.242-1.543-.434-.157-.75-.235-1.066.238-.317.472-1.227 1.543-1.504 1.859-.277.316-.55.355-1.027.12-.472-.238-1.996-.738-3.809-2.355-1.41-1.258-2.363-2.809-2.64-3.285-.278-.472-.031-.73.207-.968.214-.21.476-.554.714-.832.234-.277.312-.473.472-.789.156-.316.078-.594-.039-.832-.117-.238-1.039-2.582-1.461-3.52z"></path>
                                </g>
                            </svg>
                            WhatsApp
                        </div>
                        <div class="updates-toggle">
                            <label class="switch">
                                <input type="checkbox" id="toggle-switch" checked>
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>

                    <section class="property-selection">
                        <div class="property-type-container">
                            <div class="property-type-label">Property Type</div>
                            <div class="property-type-options">
                                <div class="property-type-option" onclick="selectPropertyType('Residential')">Apartments</div>
                                <div class="property-type-option" onclick="selectPropertyType('Commercial')">Individual house</div>
                                <div class="property-type-option" onclick="selectPropertyType('Land/Plot')">Vacant Land</div>
                                <div class="property-type-option" onclick="selectPropertyType('Industrial')">Commercial</div>
                                <div class="property-type-option" onclick="selectPropertyType('Retail')">Villas</div>
                            </div>
                        </div>
                    </section>




                    <!-- Submit Button -->
                    <div class="sell-submit-btn">
                        <button type="submit" class="submit-button">Posting Your Property</button>
                    </div>

                </form>
            </div>
        </section>
    </section>



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
    <script>
        document.getElementById('toggle-switch').addEventListener('change', function() {
            if (this.checked) {
                console.log('Switch is ON');
            } else {
                console.log('Switch is OFF');
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script>
        const phoneInput = document.querySelector("#phone");
        const iti = intlTelInput(phoneInput, {
            initialCountry: "in", // Default to India
            separateDialCode: true, // Show the country code separately
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js" // For number formatting and validation
        });
    </script>
    <script>
        function selectPropertyType(propertyType) {
            // Remove the 'active' class from all options
            let options = document.querySelectorAll('.property-type-option');
            options.forEach(option => option.classList.remove('active'));

            // Add 'active' class to the clicked option
            let selectedOption = document.querySelector(`.property-type-option:nth-child(${Array.from(options).indexOf(event.target) + 1})`);
            selectedOption.classList.add('active');

        }
    </script>


</body>

</html>