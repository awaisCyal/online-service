<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="include/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="include/css/all.min.css">

    <!-- Google Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="include/css/custom.css">
    <title>OSMS</title>
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OSMS</a>
        <span class="navbar-text">Customer's Happiness is our Aim</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="requester/requesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
                <a href="requester/requesterLogin.php" class="btn btn-success mr-4">Login</a>
                <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
            </ul>
        </div>
    </nav> <!-- End Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Start Header Jumbotron-->
    <header class="jumbotron back-image" style="background-image: url(include/images/Banner1.jpeg);">
        <div class="myclass mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OSMS</h1>
            <p class="font-italic">Customer's Happiness is our Aim</p>
        </div>
    </header> <!-- End Header Jumbotron -->

    <div class="container">
        <!--Introduction Section-->
        <div class="jumbotron">
            <h3 class="text-center">OSMS Services</h3>
            <p>
                OSMS Services is India’s leading chain of multi-brand Electronics and Electrical service
                workshops offering
                wide array of services. We focus on enhancing your uses experience by offering world-class
                Electronic
                Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
                services to
                keep the devices fit and healthy and customers happy and smiling”.

                With well-equipped Electronic Appliances service centres and fully trained mechanics, we
                provide quality
                services with excellent packages that are designed to offer you great savings.

                Our state-of-art workshops are conveniently located in many cities across the country. Now you
                can book
                your service online by doing Registration.
            </p>

        </div>
    </div>
    <!--Introduction Section End-->
    <!-- Start Services -->
    <div class="container text-center border-bottom" id="Services">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div> <!-- End Services -->

    <!-- Start Registration  -->
    <?php include ('userRegistration.php'); ?>
    <!-- End Registration  -->

    <!-- Start Happy Customer  -->
    <div class="jumbotron bg-danger" id="Customer">
        <!-- Start Happy Customer Jumbotron -->
        <div class="container">
            <!-- Start Customer Container -->
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 1st Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="include/images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Dom</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 1st Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 2nd Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="include/images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Juily</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 2nd Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 3rd Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="include/images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Jhon</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 3rd Column-->

                <div class="col-lg-3 col-sm-6">
                    <!-- Start Customer 4th Column-->
                    <div class="card shadow-lg mb-2">
                        <div class="card-body text-center">
                            <img src="include/images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title">Sara</h4>
                            <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad
                                ducimus voluptas
                                nesciunt debitis numquam.</p>
                        </div>
                    </div>
                </div> <!-- End Customer 4th Column-->
            </div> <!-- End Customer Row-->
        </div> <!-- End Customer Container -->
    </div> <!-- End Customer Jumbotron -->

    <!--Start Contact Us-->
    <?php include ('contactForm.php'); ?>
    <!-- End Contact Us -->

    <!-- Start Footer-->
    <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
        <div class="container">
            <!-- Start Footer Container -->
            <div class="row py-3">
                <!-- Start Footer Row -->
                <div class="col-md-6">
                    <!-- Start Footer 1st Column -->
                    <span class="pr-2">Follow Us: </span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
                </div> <!-- End Footer 1st Column -->

                <div class="col-md-6 text-right">
                    <!-- Start Footer 2nd Column -->
                    <small> Designed by Someone &copy; 2018.
                    </small>
                    <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                </div> <!-- End Footer 2nd Column -->
            </div> <!-- End Footer Row -->
        </div> <!-- End Footer Container -->
    </footer> <!-- End Footer -->

    <!-- Boostrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>

</body>

</html>