<br>
      <div class="container">
      <div class="row">
   
        <div class="col-md-10 col-md-offset-1">
            <h2>All Attendance This Course</h2>
            <div class="tiny-border"></div>
            <table class="table table-striped">
                <thead>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Attended?</th>
                    <th>Lecture DateTime</th>

                </thead>
                <tbody>
                    <?php foreach ($attendances as $attendance) {
                        $i = 0;
                       ?>
                    
                    <tr>
                        <td><?php echo $attendance->student_id; ?></td>
                        <td><?php echo $attendance->first_name." ".$attendance->last_name; ?></td>
                        <td><?php echo $attendance->attended; ?>
                        <td><?php echo $attendance->date; ?>
                        </td>
                    </tr>
                   <?php $i++; }?>
                </tbody>
            </table>
        </div>
                </div>
              </div>
<hr>
