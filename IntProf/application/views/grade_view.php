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
                    <th>Grade</th>
                </thead>
                <tbody>
                    <form action="<?php echo base_url('Grade/submitGrade')?>" method="POST">
                    <?php foreach ($students as $key => $value) {
                        $i = 0;
                       ?>
                    
                    <tr>
                        <td><?php echo $value->student_id; ?></td>
                        <td><?php echo $value->first_name." ".$value->last_name; ?></td>
                        <td>
                        <select name="<?php echo $value->student_id.$value->id;?>" class="form-control" >
              
              <option value="0"> <?php echo $value->grade ?></option>
              <option value="A">A</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="B-">B-</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="C-">C-</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
              <option value="F">F</option>
              
            </select>
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
