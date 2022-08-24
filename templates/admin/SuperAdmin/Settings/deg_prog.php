
                        
                         <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Edit</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php

                          $select =$con->query("SELECT * FROM  degrees order by deg_name  ") or die(mysqli_error($con));
                          $a=1;	
                          while($rows=$select->fetch_assoc()){
                          ?>
                              <tr>
                                <td><?php echo $a++; ?></td>
                                <td><?php echo $rows['deg_name']; ?></td>
                                <td><a href="?deg_prog1&id=<?php echo $rows['id']; ?>&ggdgdg" class="btn btn-primary btn-xs">Create <?php echo $rows['certi']; ?> Programs </button></td>
                              </tr>
                             <?php } ?>
                            </tbody>
                      </table>