
                        
                         <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>S/N</th>
                                <th>Program</th>
                                <th># of Applications</th>
                                <th>Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
							$select =$con->query("SELECT COUNT(personal_details.user_id) as tot_apps, stage_two.first_choice  as deg_name 
							, stage_two.first_choice as deg_type,prog_name as program  FROM  personal_details,programs,stage_two  WHERE 
                personal_details.your_id=stage_two.your_id AND programs.id=stage_two.first_choice  AND personal_details.year_id='$cur_ayear'  GROUP BY stage_two.first_choice ") or die(mysqli_error($con));
							$a=1;	
							while($rows=$select->fetch_assoc()){
							?>
                              <tr>
                                <td><?php echo $a++; ?></td>
                                <td><?php echo $rows['program']; ?></td>
                                <td><?php echo $rows['tot_apps']; ?></td>
                                <td><a href="?prog_app&id=<?php echo $rows['deg_name']; ?>&prog_name=<?php echo $rows['deg_name']; ?>&prog=<?php echo $rows['program']; ?>&73838***" class="btn btn-primary btn-xs">View All Applications</button></td>
                              </tr>
                             <?php } ?>
                            </tbody>
                      </table>