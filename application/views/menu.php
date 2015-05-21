

<div id="wrapper"> 
    <!-- start header -->             
    <header> 
        <script src="<?php echo base_url(); ?>resources/bootstrap/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Project/assets/js/evenement.js"></script>
        <div class="navbar navbar-default navbar-static-top"> 
            <div class="container"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                             
                    <a class="navbar-brand" href="index.php"><span>Tedx</span>pxl</a> 
                </div>                         
                <div class="navbar-collapse collapse "> 
                    <ul class="nav navbar-nav pull-right"> 
                        <li class="active">
                            <a href="<?php echo site_url(''); ?>">Home</a>
                        </li>                                 
                        <li> 
                            <a href="blog.html">over ons</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('calendar'); ?>">evenementen</a>
                        </li>                                 
                        <li>
                            <a href="<?php echo site_url('thread'); ?>">forum</a>
                        </li>                                 
                        <li>
                            <a href="<?php echo site_url('contact'); ?>">Contacteer ons</a>
                        </li>
                                             
                        <?php if ($this->session->userdata('cibb_logged_in') != 1): ?>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li>
                                <form class="well" action="<?php echo site_url('user/join'); ?>" method="post" style="margin: 5px 10px;">
                                <label>Username</label>
                                <input type="text" name="row[username]" class="span3" placeholder="">
                                <label>Password</label>
                                <input type="password" name="row[password]" class="span3" placeholder="">
                                <input type="submit" name="btn-login" class="btn btn-primary" value="Login"/>
                                </form>
                            </li>
                            </ul>
                            <li><a href="<?php echo site_url('user/join'); ?>">Join !</a></li>
                        </li>
                        <?php else: ?>
						<?php if ($this->session->userdata('admin_area') != 0): ?>
                        <li><a href="<?php echo site_url('admin'); ?>">Admin</a></li>
						<?php endif; ?>
                        <li><a href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
                        <?php endif; ?>
                     
                    

                    </ul>                             
                </div>                         
            </div>                     
        </div>                 
    </header>            
    <body
    <!-- end header -->  