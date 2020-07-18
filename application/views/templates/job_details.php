<?php foreach ($data as $datas) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title><?php echo $datas->title; ?> Vacancy</title>
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
            <section class="home-section">
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
        <?php } else { ?>

            <section class="" id="home-section">
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
                                    <a class="nav-link d-flex align-items-center" href="index.php/user/home"> <span class="icon-people mr-1 wrap-icon"></span><span>Login</span></a>
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
        <?php } ?>

        <!-- HOME -->
        <section class="section-hero overlay inner-page bg-image" style="background-image: url('<?php echo base_url(); ?>assets/images/first.jpg');" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold"><?php echo $datas->title; ?></h1>
                        <div class="custom-breadcrumbs">
                            <span class="text-white"><strong><?php echo $datas->title; ?></strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        $query = $this->db->query("select * from company where name = '$datas->name'");

        foreach ($query->result() as $row) { ?>
            <section class="site-section">
                <div class="container">
                    <div class="row align-items-center mb-5">
                        <div class="col-lg-8 mb-4 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <div class="border p-2 d-inline-block mr-3 rounded">
                                    <img src="<?php echo base_url(); ?>/uploads/companies/<?php echo $row->image; ?>" alt="Image" width="150" height="150">
                                </div>
                                <div>
                                    <h2><?php echo $datas->title; ?></h2>
                                    <div>
                                        <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo $datas->name; ?></span>
                                        <span class="m-2"><span class="icon-room mr-2"></span><?php echo $datas->location; ?></span>
                                        <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?php echo $datas->status; ?></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php $name = $this->session->userdata('username');
                    $com = $this->session->userdata('email');
                    if ($name == TRUE) {
                    ?>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                        Apply Now
                                    </button>
                                </div>
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } elseif ($com == TRUE) { ?>
                        <div class="alert alert-danger">Companies can't apply</div>
                    <?php } else { ?>
                        <div class="alert alert-danger">You must login to apply</div>
                    <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-5">
                                <figure class="mb-5"><img src="<?php echo base_url(); ?>/uploads/jobs/<?php echo $datas->image; ?>" alt="Image" class="img-fluid rounded"></figure>
                                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
                                <p>
                                    <?php echo $datas->description; ?>
                                </p>
                            </div>
                            <div class="mb-5">
                                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $datas->first; ?></span></li>
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $datas->sec; ?></span></li>
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $datas->third; ?></span></li>
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $datas->fourth; ?></span></li>
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $datas->last; ?></span></li>
                                </ul>
                            </div>

                            <div class="mb-5">
                                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $datas->qualification; ?></span></li>
                                </ul>
                            </div>

                            <div class="mb-5">
                                <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $datas->benefit; ?></span></li>
                                </ul>
                            </div>
                            <?php $name = $this->session->userdata('username');
                            $com = $this->session->userdata('email');
                            if ($name == TRUE) {
                            ?>
                                <div class="row mb-5">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                                    </div>
                                </div>
                            <?php } elseif ($com == TRUE) { ?>
                                <div class="alert alert-danger">Companies can't apply</div>
                            <?php } else { ?>
                                <div class="alert alert-danger">You must login to apply</div>
                            <?php } ?>

                        </div>
                        <div class="col-lg-4">
                            <div class="bg-light p-3 border rounded mb-4">
                                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                                <ul class="list-unstyled pl-3 mb-0">
                                    <li class="mb-2"><strong class="text-black">Published on:</strong> <?php echo $datas->posted_at; ?></li>
                                    <li class="mb-2"><strong class="text-black">Vacancy:</strong> <?php echo $datas->vacancy; ?></li>
                                    <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?php echo $datas->status; ?></li>
                                    <li class="mb-2"><strong class="text-black">Experience:</strong> <?php echo $datas->experience; ?></li>
                                    <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php echo $datas->location; ?></li>
                                    <li class="mb-2"><strong class="text-black">Salary:</strong> <?php echo $datas->salary; ?></li>
                                    <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $datas->gender; ?></li>
                                    <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?php echo $datas->deadline; ?></li>
                                </ul>
                            </div>

                            <div class="bg-light p-3 border rounded">
                                <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                                <div class="px-3">
                                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                                    <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>



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
<?php } ?>