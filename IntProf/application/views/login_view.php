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
                                <form method="POST" action="<?php echo site_url('home/login_submit')?>" class="form-border" id='contact_form' >
                                    <h3>Login here</h3>

                                    <div class="tiny-border"></div>

                                    <div class="field-set">
                                        <input type='text' name='username' id='name' class="form-control" placeholder="Username">
                                    </div>

                                   <div style="padding-bottom: 20px" class="field-set">
                                        <input type='password' name='password' id='password' class="form-control" placeholder="Password">
                                    </div>


                                    <div id='submit' class="pull-left">
                                        <input type='submit' name="submit" value='Login' class="btn btn-custom color-2">

                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                                        <div class="clearfix"></div>

                                        <div class="spacer-single"></div>

                                        <!-- social icons -->
                                        <ul class="list s3">
                                            <li>Or login with:</li>
                                            
                                            <li><a href="<?=$google_login_url?>">Google</a></li>
                                           
										
                                        </ul>
                                        <!-- social icons close -->

                                        <div class="spacer-double"></div>

                                        <div class="spacer-double"></div>
                                    </div>
                                </form>

                                <br><br><br>
                                

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