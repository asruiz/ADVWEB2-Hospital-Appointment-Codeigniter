<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctor | Login</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>">
	<link href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/agency.min.css"); ?>">
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
<body style="background-image: url('../../assets/images/patient.jpg'); background-size: 100% 100%; background-attachment: fixed;
background-repeat: no-repeat;">

<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>index.php/first" style="margin-left: 45px;">Mdex</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:rgba(43,50,42,0.4);">
			<ul class="nav navbar-nav navbar-right" style="margin-right: 45px;">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li><a href="<?php echo base_url(); ?>index.php/login">Patient</a></li>
				<li><a> | </a></li>
				<li><a href="<?php echo base_url(); ?>index.php/login/login_doc">Doctor</a></li>
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
				<?php $attributes = array("name" => "loginform"); echo form_open("index.php/login/login_doc", $attributes);?>
				<h1 style="font-family:Montserrat;">Log In <small>For Doctors</small></h1>
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
				<?php echo $this->session->flashdata('msg1'); ?>

				<?php echo form_close(); ?>
			</div>
		</div>
		<!--col-md-6-->
		<div class="col-md-6">
			<div id="logbox" style="width:500px;">
				<?php $attributes = array("name" => "signupform"); echo form_open("index.php/signup_doc", $attributes);?>
				<h1 style="font-family:Montserrat;">Sign Up <small>For Doctors</small></h1>
				<div>
					<input name="fname" placeholder="First Name" type="text" class="input pass" required="required" value="<?php echo set_value('fname'); ?>" />
					<span class="text-danger"><?php echo form_error('fname'); ?></span>
				</div>

				<div>
					<input name="lname" placeholder="Last Name" type="text" class="input pass" required="required" value="<?php echo set_value('lname'); ?>" />
					<span class="text-danger"><?php echo form_error('lname'); ?></span>
				</div>

				<div>
					<input name="email" placeholder="Email Address" type="email" class="input pass" required="required" value="<?php echo set_value('email'); ?>" />
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>

				<div>
					<select name="location" class="input pass">
						<option disabled selected value> Location </option>
						<option value="Caloocan" <?php echo set_select('location', 'Caloocan'); ?> >Caloocan</option>
						<option value="Las Pinas" <?php echo set_select('location', 'Las Pinas'); ?> >Las Pinas</option>
						<option value="Makati" <?php echo set_select('location', 'Makati'); ?> >Makati</option>
						<option value="Manila" <?php echo set_select('location', 'Manila'); ?> >Manila</option>
						<option value="Malabon" <?php echo set_select('location', 'Malabon'); ?> >Malabon</option>
						<option value="Mandaluyong" <?php echo set_select('location', 'Mandaluyong'); ?> >Mandaluyong</option>
						<option value="Marikina" <?php echo set_select('location', 'Marikina'); ?> >Marikina</option>
						<option value="Muntinlupa" <?php echo set_select('location', 'Muntinlupa'); ?> >Muntinlupa</option>
						<option value="Navotas" <?php echo set_select('location', 'Navotas'); ?> >Navotas</option>
						<option value="Paranaque" <?php echo set_select('location', 'Paranaque'); ?> >Paranaque</option>
						<option value="Pasay" <?php echo set_select('location', 'Pasay'); ?> >Pasay</option>
						<option value="Pasig" <?php echo set_select('location', 'Pasig'); ?> >Pasig</option>
						<option value="Quezon City" <?php echo set_select('location', 'Quezon City'); ?> >Quezon City</option>
						<option value="San Juan" <?php echo set_select('location', 'San Juan'); ?> >San Juan</option>
						<option value="Taguig" <?php echo set_select('location', 'Taguig'); ?> >Taguig</option>
						<option value="Valenzuela" <?php echo set_select('location', 'Valenzuela'); ?> >Valenzuela</option>
					</select>
					<span class="text-danger"><?php echo form_error('location'); ?></span>
				</div>

				<div>
					<select name="specialization" class="input pass">
						<option disabled selected value> Specialization </option>
						<option value="Audiologist" <?php echo set_select('specialization', 'Audiologist'); ?> >Audiologist</option>
						<option value="Allergist" <?php echo set_select('specialization', 'Allergist'); ?> >Allergist</option>
						<option value="Andrologist" <?php echo set_select('specialization', 'Andrologist'); ?> >Andrologist</option>
						<option value="Anesthesiologist" <?php echo set_select('specialization', 'Anesthesiologist'); ?> >Anesthesiologist</option>
						<option value="Bariatic Surgery" <?php echo set_select('specialization', 'Bariatic Surgery'); ?> >Bariatic Surgery</option>
						<option value="Cardiologist" <?php echo set_select('specialization', 'Cardiologist'); ?> >Cardiologist</option>
						<option value="Cardiovascular Surgeon" <?php echo set_select('specialization', 'Cardiovascular Surgeon'); ?> >Cardiovascular Surgeon</option>
						<option value="Clinical Neurophysiologist" <?php echo set_select('specialization', 'Clinical Neurophysiologist'); ?> >Clinical Neurophysiologist</option>
						<option value="Dentist " <?php echo set_select('specialization', 'Dentist '); ?> >Dentist </option>
						<option value="Dermatologist " <?php echo set_select('specialization', 'Dermatologist '); ?> >Dermatologist </option>
						<option value="Emergency Medicine" <?php echo set_select('specialization', 'Emergency Medicine'); ?> >Emergency Medicine</option>
						<option value="Endocrinologist" <?php echo set_select('specialization', 'Endocrinologist'); ?> >Endocrinologist</option>
						<option value="Epidemiologist" <?php echo set_select('specialization', 'Epidemiologist'); ?> >Epidemiologist</option>
						<option value="ENT Specialist" <?php echo set_select('specialization', 'ENT Specialist'); ?> >ENT Specialist</option>
						<option value="Family Practitioner" <?php echo set_select('specialization', 'Family Practitioner'); ?> >Family Practitioner</option>
						<option value="Gastroenterologist" <?php echo set_select('specialization', 'Gastroenterologist'); ?> >Gastroenterologist</option>
						<option value="Gynecologist" <?php echo set_select('specialization', 'Gynecologist'); ?> >Gynecologist</option>
						<option value="General Psychiatrist" <?php echo set_select('specialization', 'General Psychiatrist'); ?> >General Psychiatrist</option>
						<option value="Hematologist" <?php echo set_select('specialization', 'Hematologist'); ?> >Hematologist</option>
						<option value="Hepatologist" <?php echo set_select('specialization', 'Hepatologist'); ?> >Hepatologist</option>
						<option value="Immunologist" <?php echo set_select('specialization', 'Immunologist'); ?> >Immunologist</option>
						<option value="Infectious Disease Specialist" <?php echo set_select('specialization', 'Infectious Disease Specialist'); ?> >Infectious Disease Specialist</option>
						<option value="Internal Medicine Specialist" <?php echo set_select('specialization', 'Internal Medicine Specialist'); ?> >Internal Medicine Specialist</option>
						<option value="Internist" <?php echo set_select('specialization', 'Internist'); ?> >Internist</option>
						<option value="Medical Geneticist" <?php echo set_select('specialization', 'Medical Geneticist'); ?> >Medical Geneticist</option>
						<option value="Microbiologist" <?php echo set_select('specialization', 'Microbiologist'); ?> >Microbiologist</option>
						<option value="Neonatologist" <?php echo set_select('specialization', 'Neonatologist'); ?> >Neonatologist</option>
						<option value="Nephrologists" <?php echo set_select('specialization', 'Nephrologists'); ?> >Nephrologists</option>
						<option value="Neurologist" <?php echo set_select('specialization', 'Neurologist'); ?> >Neurologist</option>
						<option value="Neurosurgeons" <?php echo set_select('specialization', 'Neurosurgeons'); ?> >Neurosurgeons</option>
						<option value="Obstetrician" <?php echo set_select('specialization', 'Obstetrician'); ?> >Obstetrician</option>
						<option value="Oncologist" <?php echo set_select('specialization', 'Oncologist'); ?> >Oncologist</option>
						<option value="Opthalmologist" <?php echo set_select('specialization', 'Opthalmologist'); ?> >Opthalmologist</option>
						<option value="Orthopedic Surgeon" <?php echo set_select('specialization', 'Orthopedic Surgeon'); ?> >Orthopedic Surgeon</option>
						<option value="Orthopedist" <?php echo set_select('specialization', 'Orthopedist'); ?> >Orthopedist</option>
						<option value="Primatologist" <?php echo set_select('specialization', 'Primatologist'); ?> >Primatologist</option>
						<option value="Pale Pathologist" <?php echo set_select('specialization', 'Pale Pathologist'); ?> >Pale Pathologist</option>
						<option value="Parasitologist" <?php echo set_select('specialization', 'Parasitologist'); ?> >Parasitologist</option>
						<option value="Pathologists" <?php echo set_select('specialization', 'Pathologists'); ?> >Pathologists</option>
						<option value="Pediatrician" <?php echo set_select('specialization', 'Pediatrician'); ?> >Pediatrician</option>
						<option value="Plastic Surgeon" <?php echo set_select('specialization', 'Plastic Surgeon'); ?> >Plastic Surgeon</option>
						<option value="Physiologist" <?php echo set_select('specialization', 'Physiologist'); ?> >Physiologist</option>
						<option value="Physiatrist" <?php echo set_select('specialization', 'Physiatrist'); ?> >Physiatrist</option>
						<option value="Podiatrist" <?php echo set_select('specialization', 'Podiatrist'); ?> >Podiatrist</option>
						<option value="Psychiatrists" <?php echo set_select('specialization', 'Psychiatrists'); ?> >Psychiatrists</option>
						<option value="Pulmonologist" <?php echo set_select('specialization', 'Pulmonologist'); ?> >Pulmonologist</option>
						<option value="Radiologists" <?php echo set_select('specialization', 'Radiologists'); ?> >Radiologists</option>
						<option value="Reproductive Endocrinologist" <?php echo set_select('specialization', 'Reproductive Endocrinologist'); ?> >Reproductive Endocrinologist</option>
						<option value="Rheumatologist" <?php echo set_select('specialization', 'Rheumatologist'); ?> >Rheumatologist</option>
						<option value="Surgeon" <?php echo set_select('specialization', 'Surgeon'); ?> >Surgeon</option>
						<option value="Thoracic Oncologist" <?php echo set_select('specialization', 'Thoracic Oncologist'); ?> >Thoracic Oncologist</option>
						<option value="Urologist" <?php echo set_select('specialization', 'Urologist'); ?> >Urologist</option>
						<option value="Veterinarian" <?php echo set_select('specialization', 'Veterinarian'); ?> >Veterinarian</option>
					</select>
					<span class="text-danger"><?php echo form_error('specialization'); ?></span>
				</div>

				<div>
					<input class="input pass" name="facility" placeholder="Facility/Hospital" type="text" value="<?php echo set_value('facility'); ?>" />
					<span class="text-danger"><?php echo form_error('facility'); ?></span>
				</div>

				<div>
					<select name="day" class="input pass">
						<option disabled selected value> Schedule </option>
						<option value="Monday" <?php echo set_select('day', 'Monday'); ?>>Monday</option>
						<option value="Tuesday" <?php echo set_select('day', 'Tuesday'); ?>>Tuesday</option>
						<option value="Wednesday" <?php echo set_select('day', 'Wednesday'); ?>>Wednesday</option>
						<option value="Thursday" <?php echo set_select('day', 'Thursday'); ?>>Thursday</option>
						<option value="Friday" <?php echo set_select('day', 'Friday'); ?>>Friday</option>
						<option value="Saturday" <?php echo set_select('day', 'Saturday'); ?>>Saturday</option>
						<option value="Sunday" <?php echo set_select('day', 'Sunday'); ?>>Sunday</option>
					</select>
					<span class="text-danger"><?php echo form_error('day'); ?></span>
				</div>
				<div align="center">
					<div style="width: 173px; align:center;  display: inline-block;">
						<label for="fromtime">From</label>
						<input class="input pass" name="fromtime" type="time" value="<?php echo set_value('fromtime'); ?>" />
						<span class="text-danger"><?php echo form_error('fromtime'); ?></span>
					</div>

					<div class="form-group" style="width: 173px;  display: inline-block;">
						<label for="totime">To</label>
						<input class="input pass" name="totime" type="time" value="<?php echo set_value('totime'); ?>" />
						<span class="text-danger"><?php echo form_error('totime'); ?></span>
					</div>

					<div class="form-group" style="width: 173px;  display: inline-block;">
						<label for="subject">Password</label>
						<input class="input pass" name="password" placeholder="Password" type="password"/>
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>

					<div class="form-group" style="width: 173px;  display: inline-block;">
						<label for="subject">Confirm Password</label>
						<input class="input pass" name="cpassword" placeholder="Confirm Password" type="password" />
						<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
					</div>

					<div class="form-group">
						<button name="submit" type="submit" class="inputButton" style="width:100px;display: inline-block;">Signup</button>
						<button name="cancel" type="reset" class="inputButton" style="width:100px;display: inline-block;">Cancel</button>
					</div>
				</div><!-- align center-->
				<?php echo form_close(); ?>
				<?php echo $this->session->flashdata('msg3'); ?>
			</div>
		</div><!--col-md-6-->
	</div>
</div>
<script src= "<?php echo base_url("assets/js/agency.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
