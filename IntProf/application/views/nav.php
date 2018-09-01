         <!-- Navigation -->
   <nav>
                            <ul id="mainmenu">
                                <li><a href=<?php echo site_url("index.php")?>>Home<span></span></a>
                                </li>
                                <li><a href=<?php echo site_url("about.php")?>>About<span></span></a>   
                                </li>
                                <li><a href=<?php echo site_url("Home/registration")?>>Register<span></span></a> </li>
                                <li><a href=<?php echo site_url("Home/Login")?>>Log In<span></span></a>
                                </li>
                                <li><a href=<?php echo site_url("contact.html")?>>Contact<span></span></a>
                                </li>

                            </ul>
                        </nav>

                <ul class="nav navbar-nav navbar-right"> 
                   <?php 
                    if( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1){?> 
                    <li>
                        <a href="<?php echo site_url('home/logout')?>">Logout</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>