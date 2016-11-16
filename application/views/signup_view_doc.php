<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctor | Signup</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/agency/css/agency.min.css"); ?>">	
	<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.min.css">

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

<div class="container" style="margin: auto; margin-top: 100px;">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open("index.php/signup_doc", $attributes);?>
			<legend>Signup for Doctors</legend>
			
			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="name">First Name</label>
				<input class="form-control" name="fname" placeholder="Your First Name" type="text" value="<?php echo set_value('fname'); ?>" />
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>			
		
			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="name">Last Name</label>
				<input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
				<span class="text-danger"><?php echo form_error('lname'); ?></span>
			</div>

			<div class="form-group">
				<label for="email">Email Address</label>
				<input class="form-control" name="email" placeholder="Email Address" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>

			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="location">Location</label>
				<select name="location" class="form-control">
				<option value="Caloocan" <?php echo set_select('location', 'Caloocan', TRUE); ?> >Caloocan</option>
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

			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="specialization">Specialization</label>
				<select name="specialization" class="form-control">
				<option value="Audiologist" <?php echo set_select('specialization', 'Audiologist', TRUE); ?> >Audiologist</option>
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

			<div class="form-group">
				<label for="facility">Facility/Hospital</label>
				<input class="form-control" name="facility" placeholder="Facility/Hospital" type="text" value="<?php echo set_value('facility'); ?>" />
				<span class="text-danger"><?php echo form_error('facility'); ?></span>
			</div>

			<div class="form-group">
				<label for="day">Schedule</label>
				<select name="day" class="form-control">
			    <option value="Monday" <?php echo set_select('day', 'Monday', TRUE); ?>>Monday</option>
			    <option value="Tuesday" <?php echo set_select('day', 'Tuesday'); ?>>Tuesday</option>
			    <option value="Wednesday" <?php echo set_select('day', 'Wednesday'); ?>>Wednesday</option>
			    <option value="Thursday" <?php echo set_select('day', 'Thursday'); ?>>Thursday</option>
			    <option value="Friday" <?php echo set_select('day', 'Friday'); ?>>Friday</option>
			    <option value="Saturday" <?php echo set_select('day', 'Saturday'); ?>>Saturday</option>
			    <option value="Sunday" <?php echo set_select('day', 'Sunday'); ?>>Sunday</option>
				</select>
				<span class="text-danger"><?php echo form_error('day'); ?></span>
			</div>

			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="fromtime">From</label>
				<input class="form-control" name="fromtime" type="time" value="<?php echo set_value('fromtime'); ?>" />
				<span class="text-danger"><?php echo form_error('fromtime'); ?></span>
			</div>

			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="totime">To</label>
				<input class="form-control" name="totime" type="time" value="<?php echo set_value('totime'); ?>" />
				<span class="text-danger"><?php echo form_error('totime'); ?></span>
			</div>

			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="subject">Password</label>
				<input class="form-control" name="password" placeholder="Password" type="password"/>
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>

			<div class="form-group" style="width: 173px;  display: inline-block;">
				<label for="subject">Confirm Password</label>
				<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>

			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Signup</button>
				<button name="cancel" type="reset" class="btn btn-info">Cancel</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="<?php echo base_url(); ?>index.php/login_doc">Login Here</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
</body>
</html>