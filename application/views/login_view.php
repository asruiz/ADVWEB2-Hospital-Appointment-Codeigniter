<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient | Login</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/agency/css/agency.min.css"); ?>">

	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<style type="text/css">
		::selection {
			 background-color: #b5e2e7;
	 }

	 ::-moz-selection {
			 background-color: #8ac7d8;
	 }

	 #logbox {

			 padding: 10px;
			 margin: 50px auto;
			 width: 340px;
			 background-color: #fff;
			 -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
			 -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
			 box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
	 }

	 h1 {
			 text-align: center;
			 font-size: 175%;
			 color: #757575;
			 font-weight: 300;
	 }

	 h1, input {
			 font-family: "Open Sans", Helvetica, sans-serif;
	 }

	 .input {
			 width: 75%;
			 height: 50px;
			 display: block;
			 margin: 0 auto 15px;
			 padding: 0 15px;
			 border: none;
			 border-bottom: 2px solid #ebebeb;
	 }
	 .input:focus {
			 outline: none;
			 border-bottom-color: #3CC !important;
	 }
	 .input:hover {
			 border-bottom-color: #dcdcdc;
	 }
	 .input:invalid {
			 box-shadow: none;
	 }

	 .pass:-webkit-autofill {
			 -webkit-box-shadow: 0 0 0 1000px white inset;
	 }

	 .inputButton {
			 position: relative;
			 width: 85%;
			 height: 50px;
			 display: block;
			 margin: 30px auto 30px;
			 color: white;
			 background-color: #3CC;
			 border: none;
			 -webkit-box-shadow: 0 5px 0 #2CADAD;
			 -moz-box-shadow: 0 5px 0 #2CADAD;
			 box-shadow: 0 5px 0 #2CADAD;
	 }
	 .inputButton:hover {
			 top: 2px;
			 -webkit-box-shadow: 0 3px 0 #2CADAD;
			 -moz-box-shadow: 0 3px 0 #2CADAD;
			 box-shadow: 0 3px 0 #2CADAD;
	 }
	 .inputButton:active {
			 top: 5px;
			 box-shadow: none;
	 }
	 .inputButton:focus {
			 outline: none;
	 }

 }
 </style>
</head>
<body style="background-image: url('../assets/images/patient.jpg'); background-size: 100% 100%; background-attachment: fixed;
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
										<li><a href="<?php echo base_url(); ?>index.php/login">Patient</a></li>
										<li><a> | </a></li>
										<li><a href="<?php echo base_url(); ?>index.php/login_doc">Doctor</a></li>
						    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<br/>
    <div class="container" style="margin: auto; margin-top: 50px;">
			<div class="row">
        <div class="col-md-6">
            <div id="logbox">
										<?php $attributes = array("name" => "loginform"); echo form_open("index.php/login", $attributes);?>
										<h1 style="font-family:Montserrat;">Log In <small>For Patients</small></h1>
										<div>
    				 				<input name="email" type="email" placeholder="Email address" class="input pass" required="required" value="<?php echo set_value('email')?>"/>
										<span class="text-danger"><?php echo form_error('email'); ?></span>
										</div>

										<div>
                    <input name="password" type="password" placeholder="Choose a password" required="required" class="input pass"/>
										<span class="text-danger"><?php echo form_error('password'); ?></span>
										</div>

										<div align="center">
											<button name="submit" type="submit" class="inputButton" style="width:100px;display: inline-block;">Login</button>
											<button name="cancel" type="reset" class="inputButton" style="width:100px;display: inline-block;">Cancel</button>
										</div>
										<?php echo $this->session->flashdata('msg'); ?>

									<?php echo form_close(); ?>
            </div>
        </div>
        <!--col-md-6-->
				<div class="col-md-6">
						<div id="logbox" style="width:500px;">
							<?php $attributes = array("name" => "signupform"); echo form_open("index.php/signup", $attributes);?>
							<h1 style="font-family:Montserrat;">Sign Up <small>For Patients</small></h1>
							<div>
								<input name="fname" placeholder="First Name" type="text" class="input pass" required="required" value="<?php echo set_value('fname'); ?>" />
								<span class="text-danger"><?php echo form_error('fname'); ?></span>
							</div>

							<div>
								<input name="lname" placeholder="Last Name" type="text" class="input pass" required="required" value="<?php echo set_value('lname'); ?>" />
								<span class="text-danger"><?php echo form_error('lname'); ?></span>
							</div>

							<div>
								<input name="email" placeholder="Email Address" type="email" class="input pass" value="<?php echo set_value('email'); ?>" />
								<span class="text-danger"><?php echo form_error('email'); ?></span>
							</div>

							<div>
								<input name="password" placeholder="Password" type="password" class="input pass"/>
								<span class="text-danger"><?php echo form_error('password'); ?></span>
							</div>

							<div>
								<input name="cpassword" placeholder="Confirm Password" type="password"  class="input pass" />
								<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
							</div>

							<div align="center">
								<button name="submit" type="submit" class="inputButton" style="width:100px;display: inline-block;">Signup</button>
								<button name="cancel" type="reset" class="inputButton" style="width:100px;display: inline-block;">Cancel</button>
							</div>
							<?php echo form_close(); ?>
							<?php echo $this->session->flashdata('msg1'); ?>
						</div>
				</div><!--col-md-6-->
			</div>
    </div>


<script src= "<?php echo base_url("assets/agency/js/agency.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
