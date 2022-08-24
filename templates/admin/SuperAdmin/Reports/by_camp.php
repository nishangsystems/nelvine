
                        <h2><?php echo $_GET['camp']; ?> Campus Reports Stats</h2>
                         
                         
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
							$select =$con->query("SELECT COUNT(personal_details.user_id) as tot_apps,users.campus_id as campus_id,
                             degrees.deg_name as deg_name 
							, degrees.id as deg_type,campus.camp_name as camp_name  FROM  degrees,personal_details,campus,users  WHERE   
                            personal_details.deg_type=degrees.id AND personal_details.year_id='$cur_ayear'  
                            AND users.id=personal_details.your_id  AND users.campus_id=campus.id 
                             GROUP BY personal_details.deg_type  ") or die(mysqli_error($con));
							$a=1;	
							while($rows=$select->fetch_assoc()){
							?>
                              <tr>
                                <td><?php echo $a++; ?></td>
                                <td><?php echo $rows['deg_name']; ?></td>
                                <td><?php echo $rows['tot_apps']; ?></td>
                                <td><a href="?app_degre_bycamp&campus=<?php echo $rows['camp_name']; ?>&id=<?php echo $rows['deg_type']; ?>&campus_id=<?php echo $rows['campus_id']; ?>&degre_name=<?php echo $rows['deg_name']; ?>&73838***" class="btn btn-primary btn-xs">View All</button></td>
                              </tr>
                             <?php } ?>
                            </tbody>
                      </table>