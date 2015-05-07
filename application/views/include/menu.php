<!-- modal login -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Meld u aan</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('Welcome/login_user') ?>

                <input type="text" id="email" class="span4" name="email" placeholder="Email Address">
                <input type="password" id="password" class="span4" name="password" placeholder="Password">

                <!--<label class="checkbox">
                  <input type="checkbox" name="remember" value="1"> Remember Me
                </label>-->

                <button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal login -->  

<div id="wrapper"> 
    <!-- start header -->             
    <header> 
        <div class="navbar navbar-default navbar-static-top"> 
            <div class="container"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                             
                    <a class="navbar-brand" href="index.html"><span>Tedx</span>pxl</a> 
                </div>                         
                <div class="navbar-collapse collapse "> 
                    <ul class="nav navbar-nav"> 
                        <li class="active">
                            <a href="index.html">Home</a>
                        </li>                                 
                        <li> 
                            <a href="blog.html">over ons</a>
                        </li>
                        <li>
                            <a href="portfolio.html">evenementen</a>
                        </li>                                 
                        <li>
                            <a href="blog.html">forum</a>
                        </li>                                 
                        <li>
                            <a href="contact.html">Contacteer ons</a>
                        </li>
                        <li>
                            <?php
                            if ($this->session->userdata('isLoggedIn')) {
                                echo '<a href="'.base_url().'index.php/Welcome/logout_user">aangemeld</a>';
                            } else {
                                echo '<a data-toggle="modal" href="#myModal"><i class="fa fa-users"></i>aanmelden</a>';
                            }
                            ?></li>

                    </ul>                             
                </div>                         
            </div>                     
        </div>                 
    </header>             
    <!-- end header -->  