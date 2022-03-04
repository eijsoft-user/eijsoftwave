<?php require_once "auth.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Contact</title>
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
    <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fa fa-line-chart"></i> EijsoftWave
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="naviagtor.php" class="nav-link smoothScroll">Navigator</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#about" class="nav-link smoothScroll">About</a>
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


    <!-- CONTACT -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                    <h1 class="mb-4">Get in <strong>touch</strong> with <strong>us</strong></h1>

                    <p>or email us at <a href="mailto:hello@company.com">hello@eijsoftwave.com</a></p>
                </div>

                <div class="col-lg-8 mx-auto col-md-10 col-12">

                    <form action="../setup/process_forms.php" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="hidden" name="url" value="user/contact.php">
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-lg-12 col-12">
                                <textarea class="form-control" rows="6" name="message" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-lg-5 mx-auto col-7">
                                <button type="submit" class="form-control" id="submit-button" name="submit" value="contact">Send Message</button>
                            </div>
                        </div>

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
    <script src="../js/custom.js"></script>

</body>

</html>