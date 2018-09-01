  <!-- header begin -->
        <header class="autoshow">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src=<?php echo base_url("asset/images/logo-light.png")?> alt="">
                                <img class="logo-2" src=<?php echo base_url("asset/images/logo-dark.png")?>  alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
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
                               <?php  if( isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1){?> 
                                <li>
                                    <a href="<?php echo site_url('home/logout')?>">Logout</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </nav>


                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

