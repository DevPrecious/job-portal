<!doctype html>
<html lang="en">

<head>
    <title>Welcome | <?php echo $_SESSION['username']; ?></title>
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
    <?php } ?>
    <div class="row">

        <div class="bg-light p-4">

            <div class="tab-card p-4">
                <div class="tab-menu tab-secondary">
                    <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Bids</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    </div>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <p> Hello, <?php echo $_SESSION['username']; ?></p>
                        <p>Mist enveloped the ship three hours out from port. A shining crescent far beneath the flying vessel. All their equipment and instruments are alive. The sky was cloudless and of a deep dark blue. A shining crescent far beneath the flying vessel.</p>
                        <?php
                        foreach ($data as $datas) {
                        ?>
                            <img class="" width="100" height="100" src="<?php echo base_url() . 'uploads/images/' . $datas->image; ?>" alt="post">
                            <p>Full Name: <?php echo $datas->fname; ?></p>
                            <p>Email: <?php echo $datas->email; ?></p>
                            <p>Joined: <?php echo $datas->created_at; ?></p>
                            <p>Pdf: <a href="<?php echo $datas->pdf; ?>"><?php echo $datas->pdf; ?></a></p>
                    </div>
                <?php } ?>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <p>Mist enveloped the ship three hours out from port. A shining crescent far beneath the flying vessel. All their equipment and instruments are alive. The sky was cloudless and of a deep dark blue. A shining crescent far beneath the flying vessel.</p>
                    <p>All their equipment and instruments are alive. A shining crescent far beneath the flying vessel. The sky was cloudless and of a deep dark blue. </p>
                </div>
                <?php
                $email = $_SESSION['username'];
                $query = $this->db->query("select * from users where email = '$email'");

                foreach ($query->result() as $row) { ?>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <p>Mist enveloped the ship three hours out from port. A shining crescent far beneath the flying vessel. All their equipment and instruments are alive. The sky was cloudless and of a deep dark blue. A shining crescent far beneath the flying vessel.</p>
                        <form action="update" method="post" enctype="multipart/form-data">
                            <div class="input-group form-group">
                                <div class="input-group-prepend input-icon-bg-transparent">
                                    <span class="input-group-text" id="basic-addon1"><span class="icon-people"></span></span>
                                </div>
                                <input type="text" name="fname" class="form-control pl-0 border-left-0" value="<?php echo $row->fname; ?>" aria-label="Password" required aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend input-icon-bg-transparent">
                                    <span class="input-group-text" id="basic-addon1"><span class="icon-envelope"></span></span>
                                </div>
                                <input type="email" name="email" class="form-control pl-0 border-left-0" value="<?php echo $row->email; ?>" aria-label="Password" required aria-describedby="basic-addon1">
                            </div>
                            <label>Image</label><br>
                            <div class="input-group form-group">
                                <div class="input-group-prepend input-icon-bg-transparent">
                                    <span class="input-group-text" id="basic-addon1"><span class="icon-file"></span></span>
                                </div>
                                <input type="file" class="form-control pl-0 border-left-0" aria-label="Password" name="image" required aria-describedby="basic-addon1">
                            </div>
                            <label>Cv(pdf)</label><br>
                            <div class="input-group form-group">

                                <div class="input-group-prepend input-icon-bg-transparent">
                                    <span class="input-group-text" id="basic-addon1"><span class="icon-file"></span></span>
                                </div>
                                <input type="file" class="form-control pl-0 border-left-0" aria-label="Password" name="pdf" required aria-describedby="basic-addon1">
                            </div>
                            <button name="save" class="btn btn-pill px-4 btn-outline-secondary">Update</button>
                        </form>
                    <?php } ?>
                    </div>
                </div>
            </div>

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