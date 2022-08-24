
                        <h2><?php echo $_GET['camp']; ?> Campus Class List</h2>
                         
                         
                         <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>S/N</th>
                                <th>Program</th>
                               
                                <th>Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
							$select =$con->query("SELECT * from users,stage_two,programs WHERE users.id=stage_two.your_id
                            AND stage_two.first_choice AND stage_two.first_choice=programs.id 
                           AND users.campus_id='".$_GET['id']."' GROUP BY  stage_two.first_choice") or die(mysqli_error($con));
							$a=1;	
							while($rows=$select->fetch_assoc()){
							?>
                              <tr>
                                <td><?php echo $a++; ?></td>
                                <td><?php echo $rows['prog_name']; ?></td>
                              
                                <td><a href="?classlists_bycamp&campus=<?php echo $_GET['camp']; ?>&prog_id=<?php echo $rows['first_choice']; ?>&campus_id=<?php echo $_GET['id']; ?>&prog=<?php echo $rows['prog_name']; ?>&73838***" class="btn btn-primary btn-xs">View All</button></td>
                              </tr>
                             <?php } ?>
                            </tbody>
                      </table>