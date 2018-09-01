<br>
      <div class="container">
      <div class="row">
   
        <div class="col-md-10 col-md-offset-1">
            <h2>All Grades Earned</h2>
            <div class="tiny-border"></div>
            <table class="table table-striped">
                <thead>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Grade</th>

                </thead>
                <tbody>
                    <?php foreach ($grades as $grade) {
                        $i = 0;
                       ?>
                    
                    <tr>
                        <td><?php echo $grade->course_id; ?></td>
                        <td><?php echo $grade->course_name; ?></td>
                        <td><?php echo $grade->grade; ?>
                        </td>
                    </tr>
                   <?php $i++; }?>
                </tbody>
            </table>
        </div>
                </div>
              </div>
<hr>
