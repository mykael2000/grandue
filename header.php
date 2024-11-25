<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Grandue</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
    /* Add your custom styles here */
    section {
        padding: 20px;
    }

    #imageSlider {
        max-width: 300px;
        /* Adjust the maximum width as needed */
        margin: auto;
        overflow: hidden;
    }

    .carousel-inner {
        display: flex;
        flex-wrap: nowrap;
        transition: transform 0.5s ease;
    }

    .carousel-item {
        flex: 0 0 auto;
        /* Prevent items from shrinking */
        width: 100%;
        /* Ensure items take up full width */
    }

    .carousel-item img {
        max-width: 100%;
        height: auto;
    }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <a href="https://wa.me/+12023753458" style="position: fixed;
	width:70px;
	height:70px;
	bottom:65%;
	right: 2%;
	background-image: url('WhatsApp.svg.webp');
	background-repeat: no-repeat;
	background-size: 100%;
	color:#FFF;
	border-radius:50px;
	text-align:center;
        font-size:30px;
	z-index: 100;" target="_blank"></a>
    <div class="whatsapp-message">
        <a href="https://wa.me/+12023753458"></a>
    </div>
    <!-- Topbar Start -->
    <div style="background-color: #12035e" class="container-fluid text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+12023753458</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>support@Grandue.org</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-white-50 ms-4" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav style="background-color: black" class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img class="img-fluid me-3" src="logo.png" alt="" />
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <a href="faq.php" class="nav-item nav-link">FAQ</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Services</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="bos.php" class="dropdown-item">Binary Options Scams</a>
                        <a href="cs.php" class="dropdown-item">Cryptocurrency Scams</a>
                        <a href="fs.php" class="dropdown-item">Forex Scams</a>
                        <a href="sts.php" class="dropdown-item">Stock Trading Scams</a>
                        <a href="cfds.php" class="dropdown-item">CFD Scams</a>
                        <a href="obs.php" class="dropdown-item">Online Banking Scams</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
        <a href="" style="background-color: #12035e; color: #fff" class="btn px-3 d-none d-lg-block">Get A Quote</a>
    </nav>
    <!-- Navbar End -->
