<br>
<br>
<div class="container" >
	<div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h3>Don't have an account? Register now.</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <form name="contactForm" id='contact_form' class="form-border" method="post" action='http://www.themenesia.com/themeforest/linea-new/blank.php'>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>First Name:</label>
                                            <input type='text' name='firstname' id='firstname' class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Last Name:</label>
                                            <input type='text' name='lastname' id='lastname' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Email Address:</label>
                                            <input type='text' name='email' id='email' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Contact:</label>
                                            <input type='text' name='contact' id='contact' class="form-control">
                                        </div>
                                    </div>

                                    <label for=""> Birth Date</label>
				<div class="row">
					<div class="col-xs-4 col-md-1">
						<input class="form-control" name="day" placeholder="DD" type="text"
						required autofocus />

					</div>
					<div class="col-xs-4 col-md-1">

						<input class="form-control" name="month" placeholder="MM" type="text"
						required autofocus />
					</div>
					<div class="col-xs-4 col-md-2">

						<input class="form-control" name="year" placeholder="YYYY" type="text"
						required autofocus />

					</div>
				</div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Choose a Username:</label>
                                            <input type='text' name='username' id='username' class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Password:</label>
                                            <input type='text' name='password' id='password' class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="field-set">
                                            <label>Re-enter Password:</label>
                                            <input type='text' name='re-password' id='re-password' class="form-control">
                                        </div>
                                    </div>


                                    <div class="spacer-single"></div>

                                    <div class="col-md-12">

                                        <div id='submit' class="pull-left">
                                            <input type='submit' id='send_message' value='Register Now' class="btn btn-custom color-2">
                                        </div>

                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
	</div>
</div>

<style>
	body {
		padding-top: 30px;
	}
	.form-control {
		margin-bottom: 10px;
	}
</style>

<!--<script>
    $(document).ready(function () {
        $('username').change(function () {
            var username = $('#username').val();
            if (username != ''){
                $.ajax("<?php echo base_url()?>Home/check_username_availability");
                method:"POST",
                    data:{username:username},
                success:function(data) {
                    $('#username_result').html(data);
                }
            }
        });
    });

</script>-->