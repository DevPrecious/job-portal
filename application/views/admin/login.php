 <!doctype html>
 <html lang="en">

 <head>
     <title>Login</title>
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
     <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
                         <a class="nav-link d-flex align-items-center" href="#"> <span class="icon-people mr-1 wrap-icon"></span><span>Login</span></a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="icon-verified_user mr-1 wrap-icon"></span><span>ALL</span>
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                             <a class="dropdown-item" href="#">Action</a>
                             <a class="dropdown-item" href="#">Another action</a>
                             <a class="dropdown-item" href="#">Something else here</a>
                         </div>
                     </li>
                 </ul>
             </div>
         </nav>
     </div>
     <div class="row">
         <div class="col-md-6">

             <div class="bg-light p-4">
                 <form action="login" method="post">
                     <h5 class="py-3">Login</h5>
                     <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                     <?php if (isset($_SESSION['success'])) {
                        ?>
                         <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
                     <?php
                        }
                        ?>
                     <?php if (isset($_SESSION['error'])) {
                        ?>
                         <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
                     <?php
                        }
                        ?>
                     <div class="input-group form-group">
                         <div class="input-group-prepend input-icon-bg-transparent">
                             <span class="input-group-text" id="basic-addon1"><span class="icon-envelope"></span></span>
                         </div>
                         <input type="email" class="form-control pl-0 border-left-0" placeholder="Email" aria-label="Password" name="email" aria-describedby="basic-addon1">
                     </div>

                     <div class="input-group form-group">
                         <div class="input-group-prepend input-icon-bg-transparent">
                             <span class="input-group-text" id="basic-addon1"><span class="icon-lock"></span></span>
                         </div>
                         <input type="password" class="form-control pl-0 border-left-0" placeholder="Password" aria-label="Password" name="password" aria-describedby="basic-addon1">
                     </div>
                     <button class="btn btn-pill px-4 btn-outline-secondary">Login</button>
                 </form>



                 <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

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