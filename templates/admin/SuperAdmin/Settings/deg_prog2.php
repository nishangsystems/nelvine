
						<?PHP 
						CreateProgDeg();
						$select =$con->query("SELECT * FROM  campus  WHERE id='".$_GET['id']."' ") or die(mysqli_error($con));
                        				
                          while($rows=$select->fetch_assoc()){
                            $camp_name=$rows['camp_name'];
                          }
						
					
						
						?>
						<form method="POST" action="" class="form-horizontal" role="form">

					       	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  autocomplete="off" for="form-field-1"> Certication: </label>

										<div class="col-sm-9">
                                        <select style="color:#00F; font-weight:bold"  name="prog_id" id="countries-list" class="col-xs-10 col-sm-5" required >
                                                                           <?php
																	 $select_prog =$con->query("SELECT * FROM degrees where id='".$_GET['id']."' ORDER BY deg_name ") or die(mysqli_error($con));
																								
																		while($ok=$select_prog->fetch_assoc()){
																	
							                                          ?>
                                                                   <option style="color:#00F; font-weight:bold" value="<?php  echo $ok['id']; ?>"><?php  echo $ok['deg_name']; ?></option>
                                                                       <?php } ?>
            															</select>										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right"  autocomplete="off" for="form-field-1"> Program : </label>

										<div class="col-sm-9">
										<select style="color:#00F; font-weight:bold"  name="prog_id" id="countries-list" class="col-xs-10 col-sm-5" required >
                                                                        <option style="color:#00F; font-weight:bold" value="<?php echo $rows['market_source']; ?>"><?php echo $rows['market_source']; ?></option>
                                                                           <?php
																	 $select_prog =$con->query("SELECT * FROM programs ORDER BY prog_name ") or die(mysqli_error($con));
																								
																		while($ok=$select_prog->fetch_assoc()){
																	
							                                          ?>
                                                                   <option style="color:#00F; font-weight:bold" value="<?php  echo $ok['id']; ?>"><?php  echo $ok['prog_name']; ?></option>
                                                                       <?php } ?>
            															</select>
										</div>
									</div>

									
                                    
                                    
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											
                                            <?php if(isset($_GET['edit'])){ ?>
                                            <input type="hidden" name="id"  value="<?php echo $_GET['edit']; ?>" />
                                            <button class="btn btn-info" type="submit" name="save_update">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Save Updates
											</button>
                                            <?php  } else { ?>
                                            <button class="btn btn-info" type="submit" name="save">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>
												<?php } ?>

											
										</div>
									</div>
                        </form>
                        
                        
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
							$select =$con->query("SELECT * FROM programs,certificates, certificate_prog WHERE 
                             certificate_prog.deg_id='".$_GET['id']."' AND certificates.id=certificate_prog.deg_id
							AND programs.id=certificate_prog.prog_id  order by programs.prog_name DESC  ") or die(mysqli_error($con));
							$a=1;	
							while($rows=$select->fetch_assoc()){
							?>
                              <tr>
                                <td><?php echo $a++; ?></td>
                                 <td><?php echo $rows['prog_name']; ?></td>
                                  
                                <td><a href="?deg_prog1&jjkkl&id=<?php echo $rows['deg_id']; ?>&del=<?php echo $rows['id']; ?>&888d8d8" class="btn btn-danger btn-xs">Delete</button></td>
                              </tr>
                             <?php } ?>
                            </tbody>
                      </table>
                      <?php 	 
						
						if(isset($_GET['del'])){
				      $id=$_GET['del'];
						$select =$con->query("DELETE  FROM  certificate_prog WHERE  id='$id' ") or die(mysqli_error($con));
						echo "<script>alert('Successfully Deleted. Thank you')</script>";
                        
			           echo '<meta http-equiv="Refresh" content="0; url=?deg_prog1&id='.$_GET['id'].'&ghhhh">';
						}
                        ?>