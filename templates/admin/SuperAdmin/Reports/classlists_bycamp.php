
                        <h2><?php echo $_GET['prog']; ?> Class Lists for <?php echo $_GET['campus'];?> Campus </h2>
                         
                         
                         <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>S/N</th>
                                <th>Program</th>
                                <th>Level</th>
                                <th>Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
							$select =$con->query("SELECT * from users,stage_two,programs WHERE users.id=stage_two.your_id
                            AND stage_two.first_choice AND stage_two.first_choice=programs.id  AND stage_two.first_choice='".$_GET['prog_id']."'
                           AND users.campus_id='".$_GET['campus_id']."' GROUP BY  stage_two.first_choice,stage_two.level") or die(mysqli_error($con));
							$a=1;	
							while($rows=$select->fetch_assoc()){
							?>
                              <tr>
                                <td><?php echo $a++; ?></td>
                                <td><?php echo $rows['prog_name']; ?></td>
                                <td><?php echo $rows['level']; ?></td>
                              
                                <td><a href="../SuperAdmin/Reports/ddo.php?prog_id=<?php echo $rows['first_choice']; ?>&level=<?php echo $rows['level']; ?>&campus_id=<?php echo $_GET['campus_id']; ?>&year_id=<?php echo $rows['year_id']; ?>&73838***" class="btn btn-primary btn-xs">Download Class Lists</button></td>
                              </tr>
                             <?php } ?>
                            </tbody>
                      </table>