 <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url(<?php echo base_url('images/banner1.jpg')?>"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(<?php echo base_url('images/banner2.jpg')?>"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(<?php echo base_url('images/banner3.jpg')?>"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-6">
                <h1 class="page-header">
                    Welcome to Internet Professor
                </h1>
            </div>
            
             <div class="col-lg-6">
                <h1 class="page-header">
                   <?php if($this->session->flashdata('conf'))
                   {?>
                   	
					
					<div class="alert alert-info">
						  <strong> <?php  echo $this->session->flashdata('conf');?> </strong>
					</div>
                   	
				  <?php }
				   else{ ?>
					 <p> &nbsp;</p>
					<?php } ?>
                   
                 </h1>
            </div>
            
            
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>IntProf</h4>
                    </div>
                    <div class="panel-body">
                        <p>IntProf is designed to connect students, TAs, and professors so every student can get the help they need when they need it. Today, hundreds of thousands of students across hundreds of campuses are using IntProf for their classes</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
            	
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Login Here </h4>
                    </div>
                    <div class="panel-body">
						<form method="POST" action="<?php echo site_url('home/login')?>">
							<input type="text" placeholder="Username" class="form-control" name="username" /> <br />
							<input type="password" placeholder="Password" class="form-control" name="password" />
							<br />
							<input type="submit"  name="submit" value="Login" class="btn btn-success" />
							
							<a href=<?php echo site_url("Home/registration")?> class="btn btn-info">Register Here !!!</a>
							
							
						</form>
                    </div>
                </div>
            </div>
         
        </div>
        <!-- /.row -->