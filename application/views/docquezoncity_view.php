<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List of Doctors | Quezon City</title>

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
    <style type="text/css"> .scrollingTable { width: 100%; overflow-y: auto; } </style>
</head>

<body style="/*background-image: url('../assets/portfolio/images/background.jpg'); */ background-color: turquoise; background-size: 100% 100%; background-attachment: fixed; background-repeat: no-repeat;" onload="makeTableScroll();">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>index.php/home" style="color:salmon;">Mdex</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                        <a href="#page-top"></a>
                  </li>

                  <li>
                   <?php if ($this->session->userdata('login')){ ?>
                   <li><a>Hello <?php echo $this->session->userdata('uname'); ?></a></li>
                   <li><a href="<?php echo base_url(); ?>index.php/homie">Profile</a></li>                
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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DOCTORS 
                    <small>Quezon City</small>
                </h1>
            </div>
        </div>
                <input type="submit" class="form-control" value="Schedule an appointment" style="width:200px;" /><br/>

        <!-- Related Projects Row -->
        <div class="row table-responsive"" style="background-color: rgba(255,255,255,0.4); ">
               <div class="scrollingTable">
                  <table id="myTable" style="width: 100%; border-collapse: collapse;" class="table">
                    <thead>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email Address</th>
                       <th>Specialization</th>
                       <th>Facility</th>
                       <th>Schedule</th>
                    </thead>
                    <tbody>
                    <?php  
                     foreach ($h->result() as $row)  
                     {  
                        ?><tr>  
                        <td><?php echo $row->fname;?></td>  
                        <td><?php echo $row->lname;?></td>  
                        <td><?php echo $row->email;?></td> 
                        <td><?php echo $row->specialization;?></td>  
                        <td><?php echo $row->facility;?></td> 
                        <td><?php echo $row->day;?> || <?php echo $row->fromtime;?> - <?php echo $row->totime;?></td>  
                      
                        </tr>  
                     <?php } ?> 
                     </tbody>
                 </table>
               </div>
         </div> <!-- /.row -->
        <hr> <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12" style="background-color: rgba(0,0,0,0.4); color: white;">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div><!-- /.row -->
        </footer>
    </div> <!-- /.container -->

   <script type="text/javascript">
        function makeTableScroll() {
            // Constant retrieved from server-side via JSP
            var maxRows = 20;

            var table = document.getElementById('myTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
        }
    </script>
    <!-- jQuery -->
    <script src="<?php echo base_url("assets/portfolio/js/jquery.js")?>"></script>

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
