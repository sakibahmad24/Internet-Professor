
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
                                <li><a href=<?php echo site_url("register.php")?>>Register<span></span></a> </li>
                                <li><a href=<?php echo site_url("login.html")?>>Log In<span></span></a>
                                </li>
                                <li><a href=<?php echo site_url("contact.html")?>>Contact<span></span></a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <!-- section begin -->
            <section aria-label="section-login" class="full-height relative no-top no-bottom">


                <div class="container-fluid">
                    <div class="row-fluid table table-custom-1">
                        <div class="col-md-6 text-middle  bg-color text-center">
                            <div class="padding100">
                                <a href="index.html"><img class="logo" src=<?php echo base_url("asset/images/logo-white.png")?> alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6 text-middle">
                            <div class="padding100">


                                <form name="contactForm" id='contact_form' class="form-border" method="post" action="<?php echo site_url('login/loginAttempt')?>">
                                    <h3>Login here</h3>

                                    <div class="tiny-border"></div>

                                    <div class="field-set">
                                        <input type='text' name='username' id='name' class="form-control" placeholder="Username">
                                    </div>

                                    <div class="field-set">
                                        <input type='text' name='password' id='email' class="form-control" placeholder="Password">
                                    </div>

                                    <div id='submit' class="pull-left">
                                        <input type='submit' id='send_message' name="submit" value="Login" class="btn btn-custom color-2">

                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                                        <div class="clearfix"></div>

                                        <div class="spacer-single"></div>

                                        <!-- social icons -->
                                        <ul class="list s3">
                                            <li>Or login with:</li>
                                            <li><a href="#">Facebook</a></li>
                                            <li><a href="#">Google</a></li>
                                            <li><a href="#">Instagram</a></li>
                                        </ul>
                                        <!-- social icons close -->

                                        <div class="spacer-double"></div>

                                        <div class="spacer-double"></div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </section>
            <!-- section close -->
            </div>
            <!-- content close -->

            <a href="#" id="back-to-top"></a>
            <div id="preloader">
                <div class="s1">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
