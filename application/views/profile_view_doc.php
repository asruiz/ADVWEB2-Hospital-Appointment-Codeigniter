<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctor | Profile</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/agency/css/agency.min.css"); ?>">

	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
      body {
      background-image: url('..assets/portfolio/images/background.jpg');
      background-size: 100% 100%;
      background-attachment: fixed;
      background-repeat: no-repeat;
    }
    </style>
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>index.php/home_doc" style="margin-left: 45px;">Mdex</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:rgba(43,50,42,0.4);">
                <ul class="nav navbar-nav navbar-right" style="margin-right: 45px;">
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

    <div class="container" style="margin: auto; margin-top: 100px;">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
          <h4>Profile Summary</h4>
          <hr/>
          <p>First Name: <?php echo $ufname; ?></p>
          <p>Last Name: <?php echo $ulname; ?></p>
          <p>Email Address: <?php echo $uemail; ?></p>
					<p>Location: <?php echo $ulocation; ?></p>
					<p>specialization: <?php echo $uspecialization; ?></p>
					<p>Facility: <?php echo $ufacility; ?></p>
          <p>Day: <?php echo $uday; ?></p>
					<p>From: <?php echo $ufromtime; ?></p>
					<p>To: <?php echo $utotime; ?></p>

					<p><a href="<?php echo base_url(); ?>index.php/profile_doc/edit">Edit</a></p>
          <br/>
        </div>
      </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
