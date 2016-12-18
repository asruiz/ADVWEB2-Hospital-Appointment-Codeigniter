<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>

            <?php if ($this->session->userdata('login')){ ?>
              <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>index.php/first/home" style="color:salmon;">Mdex</a>

            <?php } elseif ($this->session->userdata('login_doc')) { ?>
              <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>index.php/first/home_doc" style="color:salmon;">Mdex</a>
            <?php } ?>
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

                  <?php } elseif ($this->session->userdata('login_doc')) { ?>
                    <li><a>Hello <?php echo $this->session->userdata('uname'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/profile_doc">Profile</a></li>
                  <?php } ?>
                   <li><a href="<?php echo base_url(); ?>index.php/home/help">Help</a></li>
                  <li><a href="<?php echo base_url(); ?>index.php/first/logout">Log Out</a></li>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<br/>
<br/>
