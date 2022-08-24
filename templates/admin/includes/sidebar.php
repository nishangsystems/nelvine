
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Settings 
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="?all_certi">
									<i class="menu-icon fa fa-caret-right"></i>
									Create Programs
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="?deg_prog">
									<i class="menu-icon fa fa-caret-right"></i>
									Degree Programs
								</a>

								<b class="arrow"></b>
							</li>

							
							<li class="">
								<a href="?pmt_mode">
									<i class="menu-icon fa fa-caret-right"></i>
									Payment Options
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="?set_deadline">
									<i class="menu-icon fa fa-caret-right"></i>
									Set Deadline
								</a>

								<b class="arrow"></b>
							</li>

						

							
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Applicants Accounts  </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							<li class="">
								<a href="?reset_password">
									<i class="menu-icon fa fa-home"></i>
									Reset Password
								</a>

								<b class="arrow"></b>
							</li>


							
							<li class="">
								<a href="?approve_pmts">
									<i class="menu-icon fa fa-caret-right"></i>
									Approve Payments
								</a>

								<b class="arrow"></b>
							</li>

						</ul>
					</li>

				




					<li class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Reports
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Applications Totals
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
								<li class="">
								<a href="?by_degree">
									<i class="menu-icon fa fa-caret-right"></i>
									By Degree Type
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="?by_program">
									<i class="menu-icon fa fa-caret-right"></i>
									By Program
								</a>

								<b class="arrow"></b>
							</li>


								
								</ul>
							</li>


							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>

									Financial Reports
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="">
										<a href="?general_finance">
											<i class="menu-icon fa fa-caret-right"></i>
											General Reports
										</a>

										<b class="arrow"></b>
									</li>
									<?php
	
									$a = $con->query("SELECT * FROM  users,degrees,transactions 
									where  users.id=transactions.user_id AND  transactions.year_id='$year_id'
									AND degrees.id=transactions.degree_type_id GROUP BY degrees.id=transactions.degree_type_id ") or die(mysqli_error($con));
											
									while($rows = $a->fetch_assoc()) {
									?>
	
									<li class="">
										<a href="?sector_finance&id=<?php echo $rows['degree_type_id']; ?>&others">
											<i class="menu-icon fa fa-caret-right"></i>
										<?php echo $rows['deg_name']; ?> Report
										</a>

										<b class="arrow"></b>
									</li>
									<?php } ?>
								
								</ul>



								
							</li>
						</ul>
					</li>
                    


       
                     
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Campus Reports  </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						<?php
						
						$a = $con->query("SELECT * FROM  users,campus where users.campus_id=campus.id GROUP BY users.campus_id  ") or die(mysqli_error($con));
								
						while($rows = $a->fetch_assoc()) {
						?>

						<li class="">
							<a href="?by_camp&id=<?php echo $rows['campus_id']; ?>&camp=<?php echo $rows['camp_name']; ?>&others">
								<i class="menu-icon fa fa-caret-right"></i>
							<?php echo $rows['camp_name']; ?> 
							</a>

							<b class="arrow"></b>
						</li>
						<?php } ?>

						
						</ul>
					</li>

					           
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Download Class Lists </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						<?php
						
						$a = $con->query("SELECT * FROM  users,campus where users.campus_id=campus.id GROUP BY users.campus_id  ") or die(mysqli_error($con));
								
						while($rows = $a->fetch_assoc()) {
						?>

						<li class="">
							<a href="?class_lists&id=<?php echo $rows['campus_id']; ?>&camp=<?php echo $rows['camp_name']; ?>&others">
								<i class="menu-icon fa fa-caret-right"></i>
							<?php echo $rows['camp_name']; ?> 
							</a>

							<b class="arrow"></b>
						</li>
						<?php } ?>

						
						</ul>
					</li>



					
                    
                    
                     
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> SMS   </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="?to_applicants">
									<i class="menu-icon fa fa-caret-right"></i>
									To Applicants
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="?by_program">
									<i class="menu-icon fa fa-caret-right"></i>
									By Program
								</a>

								<b class="arrow"></b>
							</li>

						
						</ul>
					</li>


					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>

							<span class="menu-text">
								Accounts & Users

								
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="?create_users&link=Create Users Accounts">
									<i class="menu-icon fa fa-caret-right"></i>
									Create Users
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="?change_password">
									<i class="menu-icon fa fa-caret-right"></i>
									Change Password
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="?access_others">
									<i class="menu-icon fa fa-caret-right"></i>
									Access Other Accounts
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="../logout.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Log Out
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
				</ul><!-- /.nav-list -->
              

			

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>