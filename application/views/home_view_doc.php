<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/portfolio/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/portfolio/css/portfolio-item.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/portfolio/css/full-slider.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/agency/vendor/bootstrap/css/bootstrap.min.css"); ?>">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/agency/css/agency.min.css"); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image: url('../assets/portfolio/images/background.jpg'); background-size: 100% 100%; background-attachment: fixed;
background-repeat: no-repeat;"">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="color:salmon;">Mdex</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li>
                <?php if ($this->session->userdata('login_doc')){ ?>
                <li><a>Hello <?php echo $this->session->userdata('uname'); ?></a></li>
                <li><a href="<?php echo base_url(); ?>index.php/profile_doc">Profile</a></li>

                <li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>

                <?php } else { ?>
                <li ><a style="color:black;">Patient |</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li></li>
                <li><a style="color:black;">Doctor |</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/login_doc">Login</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/signup_doc">Signup</a></li>
                <?php } ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Mdex Mhealth
                    <small>For Doctors</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">
            <div class="col-md-8">
               <!-- Full Page Image Background Carousel Header -->
                <header id="myCarousel" class="carousel slide" style="width: 750px; height: 450px;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                    </ol>

                    <!-- Wrapper for Slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../assets/portfolio/images/1.jpg');"></div>
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the second background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../assets/portfolio/images/2.jpg');"></div>
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the second background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../assets/portfolio/images/3.jpg');"></div>
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <!-- Set the third background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../assets/portfolio/images/4.jpg');"></div>
                            <div class="carousel-caption">
                                <h2>Caption 3</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="icon-next"></span>
                    </a>

                </header>
            </div>

            <div class="col-md-4" style="background-color: rgba(0,0,0,0.4); color: white;">
                <h3>Welcome!</h3>
                <p>You can use MDex MHealth for Doctors to check your scheduled appointments with patients, view medical records of your patients and send prescriptions to them.
               <br/>
                <div align="center">
                <a href="#loc" class="page-scroll btn btn-info">Get Started!</a>
                <br/><br/><br/>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <br/>

        <!-- Related Projects Row -->
        <div class="row" id = "portfolio" style="background-color: rgba(255,255,255,0.3); ">

            <div class="col-lg-12" id="loc">
                <h3 class="page-header">Features</h3>
            </div>

            <!--Appointments -->
            <div class="col-md-4 col-sm-6 portfolio-item">
               <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/portfolio/images/schedule.jpg" class="img-responsive" alt="">
                </a>
                    <div class="portfolio-caption">
                        <h4>Appointments</h4>
                        <p class="text-muted">Check your scheduled appointments</p>
                    </div>
            </div>

            <!--Medical Records -->
            <div class="col-md-4 col-sm-6 portfolio-item">
               <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/portfolio/images/medrecords.jpg" class="img-responsive" alt="">
                </a>
                    <div class="portfolio-caption">
                        <h4>Medical Records</h4>
                        <p class="text-muted">Information on patients</p>
                    </div>
            </div>

            <!--Submit Prescriptions -->
            <div class="col-md-4 col-sm-6 portfolio-item">
               <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../assets/portfolio/images/prescription.jpg" class="img-responsive" alt="">
                </a>
                    <div class="portfolio-caption">
                        <h4>Submit Prescription</h4>
                        <p class="text-muted">Provide prescriptions to patients</p>
                    </div>
            </div>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12" style="background-color: rgba(0,0,0,0.4); color: white;">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url("assets/portfolio/js/jquery.js")?>"></script>
        <script src="<?php echo base_url("assets/portfolio/js/bootstrap.js")?>"></script>


    <!-- Bootstrap Core JavaScript -->
    <script  src="<?php echo base_url("assets/portfolio/js/bootstrap.min.js")?>"></script>

     <!-- jQuery -->
    <script src= "<?php echo base_url("assets/agency/vendor/jquery/jquery.min.js")?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src= "<?php echo base_url("assets/agency/vendor/bootstrap/js/bootstrap.min.js")?>"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src= "<?php echo base_url("assets/agency/js/jqBootstrapValidation.js")?>"></script>
    <script src= "<?php echo base_url("assets/agency/js/contact_me.js")?>"></script>

    <!-- Theme JavaScript -->
    <script src= "<?php echo base_url("assets/agency/js/agency.min.js")?>"></script>
</body>

</html>
