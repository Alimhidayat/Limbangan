<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Farmi - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>Limbangan - Kontak</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container-fluid">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        <li class="dropdown">

                        </li>
                        <!-- <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li> -->
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div style="width: 300px;" class="navbar-brand">
                        <img src="assets/img/logo_baru.jpg" class="logo" alt="Logo">
                        <h4 class="font-weight-bold text-dark font-logo" style="display: inline; vertical-align: middle;">Limbangan</h4>
                    </div>

                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <?php require_once "header.php" ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>


        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/sawah22.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Hubungi Kami</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Beranda</a></li>
                        <li class="active">Hubungi Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact 
    ============================================= -->
    <div class="contact-area default-padding">
        
        <div class="container-full">
            <div class="contact-items">
                <div class="row align-center">
                    <div class="col-lg-3 contact-info">
                        <ul>
                             <li>
                                <h4>Our Location</h4>
                                <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                            </li>
                            <li>
                                <h4>Phone</h4>
                                <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                            </li>
                            <li>
                                <h4>Email</h4>
                                <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-content">
                            <h2>Leave a message</h2>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                            <span class="alert-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit">
                                            Send Now
                                        </button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-md-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Fixed Shape -->
        <div class="fixed-shape">
            <img src="assets/img/shape/2.png" alt="Shape">
        </div>
        <!-- Fixed Shape -->
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="col-lg-5 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo_footer.jpg" alt="Logo">
                            <p>
                                <br>
                                Badan Penyuluhan Pertanian (BPP) <br>Limbangan Kabupaten Garut.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li>
                                    <a href="#">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="#">Progam</a>
                                </li>
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Hubungi Kami</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item recent-post">
                            <h4 class="widget-title">Kontak</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="info ml-3">
                                        <a href="#">+62 852 ** ***</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="info ml-3">
                                        <a href="#">+62 852 ** ***</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="info ml-3">
                                        <a href="#">BppLimbangan@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->

                    <!-- Single Itme -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright &copy; 2023.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>