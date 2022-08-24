
                        
                         <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>S/N</th>
                                <th>Program</th>
                                <th># of Applications</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
							$select =$con->query("SELECT COUNT(personal_details.user_id) as tot_apps, degrees.deg_name as deg_name 
							, degrees.id as deg_type  FROM  degrees,users,personal_details  WHERE   
                            personal_details.deg_type=degrees.id AND personal_details.year_id='$cur_ayear'
                            AND personal_details.user_id=users.id AND users.campus_id='$campus_id'   GROUP BY personal_details.deg_type  ") or die(mysqli_error($con));
							$a=1;	
							while($rows=$select->fetch_assoc()){
							?>
                              <tr>
                                <td><?php echo $a++; ?></td>
                                <td><?php echo $rows['deg_name']; ?></td>
                                <td><?php echo $rows['tot_apps']; ?></td>
                                <td><a href="?app_degre_camp&campus_id=<?php echo $campus_id; ?>&id=<?php echo $rows['deg_type']; ?>&degre_name=<?php echo $rows['deg_name']; ?>&73838***" class="btn btn-primary btn-xs">View All</button></td>
                              </tr>
                             <?php } ?>
                            </tbody>
                      </table>