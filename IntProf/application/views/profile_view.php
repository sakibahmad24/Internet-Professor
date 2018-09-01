<br>
       <div class="container">
      <div class="row">
   
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">WELCOME!<?php echo" ". $first_name." ".$last_name ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">

                <?php if ($gender=="male"):?>
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url('images/demoProfileMale.png')?>" class="img-circle img-responsive"> </div>

                <?php else: ?>
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url('images/demoProfileFemale.png')?>" class="img-circle img-responsive"> </div>
                <?php endif; ?>

                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                                               <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php echo $gender ?></td>
                      </tr>
                        <tr>
                        <td>Type</td>
                        <td><?php if($user_type == 1 ):
                          echo "Instructor";
                        
                         else:
                          echo "Student";
                        endif;
                          ?></td>
                      </tr>
                      </tr>
                        <tr>
                        <td>Designation</td>
                        <td><?php echo $designation ?></td>
                      </tr>

                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?php echo $email ?></a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php echo $contact ?>
                        </td>   
                      </tr>
                    </tbody>
                  </table>
                  <a href="<?php echo site_url("courses")?>" class="btn btn-primary">Ongoing Courses</a>
                  <!-- <a href="<?php //echo site_url("profile")?>" class="btn btn-primary">Change Password</a> -->
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="<?php echo site_url("profile/changeInfo/".$_SESSION['id'])?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>

<hr>

