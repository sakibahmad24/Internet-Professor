<br>
       <div class="container">
      <div class="row">
   
        <div class="col-md-10 col-md-offset-1">
            <h2>All Students</h2>
            <div class="tiny-border"></div>
            <table class="table table-striped">
                <thead>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Date</th>
                    <th>Present/Absent</th>
                </thead>
                <tbody>
                    <form action="<?php echo base_url('Attendance/save_attendance')?>" method="POST">
                    <?php foreach ($students as $key => $value) {
                        $i = 0;
                       ?>
                    
                    <tr>
                        <td><?php echo $value->student_id; ?></td>
                        <td><?php echo $value->first_name." ".$value->last_name; ?></td>
                        <td><?php  echo date('d-m-Y'); ?></td>
                        <td>
                            <input checked type="radio" name="<?php echo $value->student_id?>" value="yes"> Yes
                            <input  type="radio" name="<?php echo $value->student_id?>" value="no"> No
                        </td>
                    </tr>
                   <?php $i++; }?>
                   <tr>
                   <input type="submit" name="submit" value="Submit">
                   <input type="hidden" name="course_id" value="<?php echo $course_id ?>">
                   </tr>
               </form>
                </tbody>
            </table>
        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<hr>
