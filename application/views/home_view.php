<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <link href="<?php echo base_url("assets/portfolio/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/portfolio/css/portfolio-item.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/portfolio/css/full-slider.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("assets/agency/vendor/bootstrap/css/bootstrap.min.css"); ?>">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url("assets/agency/css/agency.min.css"); ?>">

    <style type="text/css">
        @font-face {
            font-family: Beba;
            src: url(../assets/fonts/BebasNeue.otf);
        }

        h2 {
            font-family: Beba;
            color: rgb(51,51,51);
            text-align: center;
            vertical-align: middle;
        }

        .bg {
            background-color: rgba(190,216,228,0.3);
        }
    </style>

</head>

<body style="background-image: url('../assets/portfolio/images/background.jpg'); background-size: 100% 100%; background-attachment: fixed; background-repeat: no-repeat;">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>index.php/home" style="color:salmon;">Mdex</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li>
                <?php if ($this->session->userdata('login')){ ?>
                <li><a>Hello <?php echo $this->session->userdata('uname'); ?></a></li>
                <li><a href="<?php echo base_url(); ?>index.php/profile">Profile</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
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
                    <small>For Patients</small>
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
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for Slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <!-- Set the first background image using inline CSS below. -->
                            <div class="fill" style="background-image:url('../assets/portfolio/images/01.jpg');"></div>
                            <div class="carousel-caption">
                                <!--<h2>Caption 1</h2>-->
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
                        <!--<div class="item">
                            Set the third background image using inline CSS below. 
                            <div class="fill" style="background-image:url('../assets/portfolio/images/4.jpeg');"></div>
                            <div class="carousel-caption">
                            </div>
                        </div>-->
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
                <h3>Schedule an appointment</h3>
                <a href="#loc" class="page-scroll">
                <img src="../assets/images/calendar.png" width="100" height="100" style="float: left;">
                </a>
                <p style="float: clear; text-align: justify; "> For easier navigation, you may see the different locations around Metro Manila with lists of doctors you may schedule an appointment with.</p>
            </div>

            <div class="col-md-4" style="background-color: rgba(0,0,0,0.4); color: white;">
                <h3>View your prescriptions</h3>
                <a href="<?php echo base_url ('index.php/showdoc/show'); ?>">
                <img src="../assets/images/prescription.png" width="100" height="100" style="float: left;">
                </a>
                <p style="float: clear; text-align: justify; "> Check prescriptions given by your doctor</p>
                <br/><br/><br/>
                <!--<div align="center">
                <a href="#loc" class="page-scroll btn btn-info">Get Started!</a>
                <br/><br/><br/>
                </div>-->
            </div>

        </div>
        <!-- /.row -->
        <br/>
        <!-- Related Projects Row -->
        <div class="row" style="background-color: rgba(255,255,255,0.7); ">

            <div class="col-lg-12" id="loc">
                <h3 class="page-header">Locations</h3>
                <h4>Metro Manila</h4>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/show'); ?>">
                    <h2>City of Manila</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showcaloocan'); ?>">
                    <h2>Caloocan</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showlaspinas'); ?>">
                <h2>Las Pinas</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showmakati'); ?>">
                <h2>Makati</h2>
                </a>
            </div>

             <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showmalabon'); ?>">
                <h2>Malabon</h2>
                </a>
            </div>

             <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showmandaluyong'); ?>">
                <h2>Mandaluyong</h2>
                </a>
            </div>

             <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showmarikina'); ?>">
                <h2>Marikina</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showmuntinlupa'); ?>">
                <h2>Muntinlupa</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/shownavotas'); ?>">
                <h2>Navotas</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showparanaque'); ?>">
                <h2>Paranaque</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showpasay'); ?>">
                <h2>Pasay</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showpasig'); ?>">
                <h2>Pasig</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showquezoncity'); ?>">
                <h2>Quezon City</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showsanjuan'); ?>">
                <h2>San Juan</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showtaguig'); ?>">
                <h2>Taguig</h2>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6 bg">
                <a href="<?php echo base_url ('index.php/showdoc/showvalenzuela'); ?>">
                <h2>Valenzuela</h2>
                </a>
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


    <script src="<?php echo base_url("assets/portfolio/js/jquery.js")?>"></script>
    <script  src="<?php echo base_url("assets/portfolio/js/bootstrap.min.js")?>"></script>
    <script src= "<?php echo base_url("assets/agency/vendor/jquery/jquery.min.js")?>"></script>
    <script src= "<?php echo base_url("assets/agency/vendor/bootstrap/js/bootstrap.min.js")?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src= "<?php echo base_url("assets/agency/js/jqBootstrapValidation.js")?>"></script>
    <script src= "<?php echo base_url("assets/agency/js/contact_me.js")?>"></script>
    <script src= "<?php echo base_url("assets/agency/js/agency.min.js")?>"></script>
</body>

</html>
