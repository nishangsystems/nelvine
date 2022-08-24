<?php

    include '../../includes/functions.php';






// output headers so that the file is downloaded rather than displayed

    $check=$con->query("SELECT * FROM programs where id='".$_GET['prog_id']."' 
			 ") or die(mysqli_error($con));
			 while($rows=$check->fetch_assoc()){
				 $dept_name=$rows['prog_name'];
			 }
			 
			  $check=$con->query("SELECT * FROM campus where id='".$_GET['campus_id']."' 
			 ") or die(mysqli_error($con));
			 while($rows=$check->fetch_assoc()){
				echo $campus_name=$rows['camp_name'];
			 }
			 
			  $check=$con->query("SELECT * FROM ayear where id='".$_GET['year_id']."' 
			 ") or die(mysqli_error($con));
			 while($rows=$check->fetch_assoc()){
				 $year_name=$rows['cur_ayear'];
			 }
			 
			 $check=$con->query("SELECT * FROM levels where lname='".$_GET['level']."' 
			 ") or die(mysqli_error($con));
			 while($rows=$check->fetch_assoc()){
				 $level_name=$rows['lname'];
			 }
				 $file_name=$dept_name." Level ." .$level_name ."For " . $campus_name ."For";
            

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename='.$file_name.'.csv');
       
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

fputcsv($output, array('Name','Matricule','Sex','Place of Birth','Date of Birth','Campus'));
$year=date('Y');


$rows = $con->query("SELECT users.full_name,personal_details.matricule,personal_details.sex,
personal_details.pob,personal_details.dob,users.campus_id  FROM users,personal_details,stage_two WHERE users.year_id='".$_GET['year_id']."'
AND personal_details.your_id=users.id AND stage_two.your_id=users.id  AND users.campus_id='".$_GET['campus_id']."'
AND stage_two.first_choice='".$_GET['prog_id']."' 
AND stage_two.level='".$_GET['level']."'  AND users.campus_id='".$_GET['campus_id']."'  AND  personal_details.admitted='1'

") or die(mysqli_error($con));
// loop over the rows, outputting them
while ($row = $rows->fetch_assoc()) fputcsv($output, $row);
















?>