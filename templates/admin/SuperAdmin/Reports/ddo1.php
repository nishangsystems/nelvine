<?php

    include '../../includes/functions.php';






// output headers so that the file is downloaded rather than displayed

			 $file_name=$dept_name." Level ." .$level_name ."For " . $year_name;

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename='.$file_name.'.csv');
       
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

fputcsv($output, array('Name','Campus ID','Matricule','Sex','Place of Birth','Date of Birth'));
$year=date('Y');


$rows = $con->query("SELECT  personal_details.matricule,users.campus_id   FROM
 users,personal_details  WHERE
 personal_details.your_id=users.id  
  AND  personal_details.admitted='1'

") or die(mysqli_error($con));
// loop over the rows, outputting them
while ($row = $rows->fetch_assoc()) fputcsv($output, $row);
















?>