
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile Page</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> 
                                <div style="background-color: white" class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src=<?php echo base_url("asset/images/avatar.jpg")?> class="thumb-lg img-circle" alt="img"></a>
                                        <h4 style="color: black" class="text-white"><?php echo" ". $first_name." ".$last_name ?></h4>
                                        <h5 style="color: black" class="text-white"><?php echo $email ?></h5> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div  class="form-group">
                                    <label class="col-md-12">Gender:</label>
                                    <div class="col-md-12"><br>
                                        <p><?php echo $gender ?></p>
                                        <hr>

                                         </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Type:</label>
                                    <div class="col-md-12"><br>
                                        <p><?php if($user_type == 1 ):
                          echo "Instructor";
                        
                         else:
                          echo "Student";
                        endif;
                          ?></p> <hr></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Designation:</label>
                                    <div class="col-md-12"><br>
                                        <?php echo $designation ?><hr> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12"><br>
                                        <?php echo $email ?><hr></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone Number</label>
                                    <div class="col-md-12"><br>
                                        <?php echo $contact ?><hr> </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-sm-12">Select Country</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Update Profile</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            
        