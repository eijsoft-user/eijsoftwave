<?php require_once "auth.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>EijsoftWave</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../css/templatemo-digital-trend.css">

</head>

<body>

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <i class="fa fa-line-chart"></i> EijsoftWave
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="navigator.php" class="nav-link smoothScroll">Navigator</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link contact">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="hero-text">

                        <h1 class="text-white" data-aos="fade-up">We are ready, let's thrive</h1>

                        <a href="../contact.php" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a>

                        <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +234 8163 608 398</strong>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                        <img src="../images/working-girl.png" class="img-fluid" alt="working girl">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section-padding pb-0" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">

                        <h2 class="mb-4" data-aos="fade-up">Welcome to <strong>EijsoftWave</strong></h2>

                        <p class="mb-0" data-aos="fade-up">Excepturi, illo voluptatum maxime necessitatibus a nihil inventore rem nisi labore soluta quam quo praesentium consectetur, distinctio, voluptas fuga
                            <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, illo voluptatum maxime necessitatibus a nihil inventore rem nisi labore soluta quam quo praesentium consectetur, distinctio, voluptas fuga est possimus
                            unde!.
                        </p>
                    </div>

                    <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                        <img src="../images/office.png" class="img-fluid" alt="office">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="blog section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12">

                    <img src="../images/newsletter.png" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
                </div>

                <div class="col-lg-5 mr-auto mt-5 pt-5 col-md-6 col-12 newsletter-form">
                    <h4 data-aos="fade-up" data-aos-delay="200">Email Newsletter</h4>

                    <h2 data-aos="fade-up" data-aos-delay="300">Let’s stay up-to-date. We'll share you all good stuffs.</h2>
                    <form action="#" method="get" enctype="multipart/form-data">
                        <div class="form-group mt-4" data-aos="fade-up" data-aos-delay="400">
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Please enter your email" required>

                            <small id="emailHelp" class="form-text text-muted">We'll NOT share your email address to anyone else.</small>

                        </div>

                        <div class="form-group form-check" data-aos="fade-up" data-aos-delay="500">
                            <input name="monthly" type="checkbox" class="form-check-input" id="monthly">

                            <label class="form-check-label" for="monthly">Please send me a monthly newsletter.</label>
                        </div>

                        <button type="submit" data-aos="fade-up" data-aos-delay="500" class="btn w-100 mt-3">Sign up</button>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i> +234 8163 608 398
                    </p>

                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i> hello@eijsoftwave.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Address</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i> Owerri, Imo State, Nigeria
                    </p>
                </div>

                <div class="col-lg-12 mx-lg-auto text-center col-md-12 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; 2022 EijsoftWave</p>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/custom.js"></script>

</body>

</html>