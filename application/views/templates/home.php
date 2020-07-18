<!doctype html>
<html lang="en">

<head>
    <title>Need A Job, Get A Job</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/line-icons/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/nouislider.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/icomoon.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/style.css">
</head>

<body>
    <?php $name = $this->session->userdata('username');
    if ($name == TRUE) {
    ?>
        <section class="home-section section-hero  bg-image" style="background-image: url('<?php echo base_url(); ?>assets/images/first.jpg');" id="home-section">
            <div>

                <nav class=" px-4 navbar navbar-expand-lg navbar-dark bg-secondary mb-4">
                    <a class="navbar-brand" href="#">Gotten</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown4" aria-controls="navbarNavDropdown4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown4">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><span class="icon-home2 mr-1 wrap-icon"></span><span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="icon-local_florist mr-1 wrap-icon"></span><span>Features</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" href="index.php/user/home"> <span class="icon-people mr-1 wrap-icon"></span><span>Dashboard</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon-verified_user mr-1 wrap-icon"></span><span>ALL</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="index.php/company/join">Companies</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
        </section>
        <br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="p-4 mb-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Job Title" />
                    </div>

                    <button class="btn btn-pill px-4 btn-outline-primary">Search</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="p-4">
                    <h4>Trending:</h4>
                    <span class="badge badge-pill badge-info">UI/UX</span>
                    <span class="badge badge-pill badge-info">Web Design</span>
                    <span class="badge badge-pill badge-info">Accountant</span>
                </div>
                <a href="#next" class="scroll-button smoothscroll">
                    <span class=" icon-keyboard_arrow_down"></span>
                </a>
            </div>
        </div>
    <?php } ?>
    <?php $name = $this->session->userdata('username');
    if ($name == FALSE) {
    ?>
        <section class="home-section section-hero  bg-image" style="background-image: url('<?php echo base_url(); ?>assets/images/first.jpg');" id="home-section">
            <div>

                <nav class=" px-4 navbar navbar-expand-lg navbar-dark bg-secondary mb-4">
                    <a class="navbar-brand" href="#">Gotten</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown4" aria-controls="navbarNavDropdown4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown4">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><span class="icon-home2 mr-1 wrap-icon"></span><span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="icon-local_florist mr-1 wrap-icon"></span><span>Features</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center" href="index.php/auth/join"> <span class="icon-people mr-1 wrap-icon"></span><span>Login</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon-verified_user mr-1 wrap-icon"></span><span>ALL</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="index.php/company/join">Companies</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>


        </section>
        <br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="p-4 mb-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Job Title" />
                    </div>

                    <button class="btn btn-pill px-4 btn-outline-primary">Search</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="p-4">
                    <h4>Trending:</h4>
                    <span class="badge badge-pill badge-info">UI/UX</span>
                    <span class="badge badge-pill badge-info">Web Design</span>
                    <span class="badge badge-pill badge-info">Accountant</span>
                </div>
                <a href="#next" class="scroll-button smoothscroll">
                    <span class=" icon-keyboard_arrow_down"></span>
                </a>
            </div>
        </div>
    <?php } ?>

    <br><br><br><br>
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('<?php echo base_url(); ?>assets/images/clipart.png');">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
                    <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="1930">1000</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="54">1000</strong>
                    </div>
                    <span class="caption">Jobs Posted</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="120">1000</strong>
                    </div>
                    <span class="caption">Jobs Filled</span>
                </div>

                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="550">1000</strong>
                    </div>
                    <span class="caption">Companies</span>
                </div>


            </div>
        </div>
    </section>
    <section class="site-section">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2">Job Listed</h2>
                </div>
            </div>
            <?php foreach ($data as $datas) { ?>
                <ul class="job-listings mb-5">
                    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                        <a href="all/<?php echo $datas->id; ?>"></a>
                        <div class="job-listing-logo">
                            <img src="<?php echo base_url(); ?>/uploads/jobs/<?php echo $datas->image; ?>" width="150" height="150" alt="image" class="img-fluid">
                        </div>

                        <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                            <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                                <h2><?php echo $datas->title; ?></h2>
                                <strong><?php echo $datas->name; ?></strong>
                            </div>
                            <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                                <span class="icon-room"></span> <?php echo $datas->location; ?>
                            </div>
                            <div class="job-listing-meta">
                                <span class="badge badge-danger"><?php echo $datas->status; ?></span>
                            </div>
                        </div>
                    </li>
                <?php } ?>


                </ul>
                <div class="row pagination-wrap">
                    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                        <button>Browse more</button>
                    </div>
                </div>
        </div>

        </div>
    </section>
    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="text-white">Looking For A Job?</h2>
                    <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
                </div>
                <div class="col-md-3 ml-auto">
                    <a href="index.php/auth/join" class="btn btn-warning btn-block btn-lg">Sign Up</a>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section py-4">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12 text-center mt-4 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <h2 class="section-title mb-2">Company We've Helped</h2>
                            <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
                </div>

                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_apple.svg" alt="Image" class="img-fluid logo-5">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_tinder.svg" alt="Image" class="img-fluid logo-6">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_sony.svg" alt="Image" class="img-fluid logo-7">
                </div>
                <div class="col-6 col-lg-3 col-md-6 text-center">
                    <img src="images/logo_airbnb.svg" alt="Image" class="img-fluid logo-8">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light pt-5 testimony-full">

        <div class="owl-carousel single-carousel">


            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center text-center text-lg-left">
                        <blockquote>
                            <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                            <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-right">
                        <img src="<?php echo base_url(); ?>assets/images/slider_1.jpg" alt="Image" class="img-fluid mb-0">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center text-center text-lg-left">
                        <blockquote>
                            <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                            <p><cite> &mdash; Chris Peters, @Google</cite></p>
                        </blockquote>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-right">
                        <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('<?php echo base_url(); ?>assets/images/img_1.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
                    <h2 class="text-white">Get The Mobile Apps</h2>
                    <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
                    <p class="mb-0">
                        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
                        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
                    </p>
                </div>
                <div class="col-md-6 ml-auto align-self-end">
                    <img src="<?php echo base_url(); ?>assets/images/slider_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
            <span class="icon-keyboard_arrow_up"></span>
        </a>

        <div class="container">
            <div class="row mb-5">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Search Trending</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Developers</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">CSS3</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Contact Us</h3>
                    <div class="footer-social">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <p class="copyright"><small>
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>
                </div>
            </div>
        </div>
    </footer>

    </div>






    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/stickyfill.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/aos.js"></script>

    <script src="<?php echo base_url(); ?>assets/js1/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/moment-with-locales.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js1/main.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/moments.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>