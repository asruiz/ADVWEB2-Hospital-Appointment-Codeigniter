<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctor | Login</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/agency/css/agency.min.css"); ?>">
	
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url('../assets/images/doctor.jpg'); background-size: 100% 100%; background-attachment: fixed;
background-repeat: no-repeat;">

<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>index.php/firstpage" style="margin-left: 45px;">Mdex</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:rgba(43,50,42,0.4);">
                <ul class="nav navbar-nav navbar-right" style="margin-right: 45px;">
                   <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                <?php if ($this->session->userdata('login')){ ?>
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

<br/>
<div class="container" style="margin: auto; margin-top: 100px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well" style="background-color:rgba(43,50,42,0.3); border-style: none;">
		<?php $attributes = array("name" => "loginform");
			echo form_open("index.php/login_doc", $attributes);?>
			<legend style="color:#fff;">Login for Doctors</legend>
			<div class="form-group">
				<label for="name" style="color:#fff;">Email Address</label>
				<input class="form-control" name="email" placeholder="Enter Email Address" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group">
				<label for="name" style="color:#fff;">Password</label>
				<input class="form-control" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Login</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-left">	
		<b>New User?</b> <br/><a href="<?php echo base_url(); ?>index.php/signup_doc" style="color: maroon;"><b>Sign Up Here</b></a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
