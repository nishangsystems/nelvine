<?php
    
    // Turn off all error reporting
     error_reporting(1); 
	 
    $con = mysqli_connect('localhost','nishang','google1234','2022_nel');
    //$con = mysqli_connect('localhost','u182156984_stlouisapp','Cpadmin@123','u182156984_stlouisapp');;        
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


	function dbcon(){
		static $conn;
	  if ($conn===NULL){ 
		  $conn = mysqli_connect ('localhost','nishang','google1234','2022_nel');;
		 // $conn = mysqli_connect ('localhost','u182156984_stlouisapp','Cpadmin@123','u182156984_stlouisapp');;
	  }
	  return $conn;
	  }

	function Login(){
		$con= dbcon();
	
			if (isset($_POST['doLogin'])) {
				
				$email = strip_tags($_POST['usr_email']);
				$password = strip_tags($_POST['password']);
				
				$email = $con->real_escape_string($email);
				$password = $con->real_escape_string($password);
				
				$query = $con->query("SELECT id, user_email,tel, pwd,year_id FROM users WHERE user_email='$email'
				OR tel='$email'  ") or die(mysqli_error($con));
				$row=$query->fetch_array();
				
				 $count = $query->num_rows; // if email/password are correct returns must be 1 row
				
				if (password_verify($password, $row['pwd']) && $count==1)
				 {
					 
					 
				$_SESSION['userSession'] = $row['id'];
					
				
				
				////get the email of the user using the session_id  
					
			$query =$con->query("SELECT * FROM users WHERE id='".$_SESSION['userSession']."' ") or die(mysqli_error($con));
			
			 while($userRow=$query->fetch_array()){
			 
			echo $email=$userRow['user_email'];
			 $status=$userRow['user_level'];
			 
			 }
			
			 
			 ////////////////
			 $query =$con->query("SELECT * FROM sectors WHERE area='$status'  ") or die(mysqli_error($con));
			 
			 while($userRow=$query->fetch_array()){
			 
			 $link=$userRow['link'];
			 
					echo '<meta http-equiv="Refresh" content="0; url='.$link.'">';
			  
			 
			 }
			 
			 /////////////////
			
				  
					echo '<meta http-equiv="Refresh" content="0; url='.$link.'">';
			  
			  
				} 
				else {
					echo $msg = "<div class='alert alert-danger'>
								<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
							</div>";
				}
				$con->close();
			}
	}
	
	function Uploada(){
		$con= dbcon();
			if(isset($_POST['save'])) {
				$errors= array();
	$f_name = $_FILES['image']['name'];
	if(empty($f_name)){
		$file_name="";
	}
	else {
		$file_name = rand(1,10000).$_FILES['image']['name'];
	}
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
	  $supported_image = array('gif','jpg','jpeg','png');
	  $folder = "./img/" . $file_name;

  

   $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

      //echo $ext; 
	// Using strtolower to overcome case sensitive



		$query = $con->query("INSERT INTO images_a set  
		name='$file_name'") or die(mysqli_error($con));

		move_uploaded_file( $file_tmp, $folder);
		//echo "<script>alert('Transaction is successfull')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=?upload">';
	  }
      
      
		}



		function DeleteUploada(){
		
			$con= dbcon();
		if(isset($_GET['id'])){
			
			
			$del=$_GET['id'];
			$image=$_GET['image'];
		
		$query =$con->query("DELETE FROM images_a WHERE id='$del' ") or die(mysqli_error($con));
		unlink("img/$image");
		echo '<meta http-equiv="Refresh" content="0; url=?upload">';
		

		
		}
}



function Uploadb(){
	$con= dbcon();
		if(isset($_POST['save'])) {
			$errors= array();
$f_name = $_FILES['image']['name'];
if(empty($f_name)){
	$file_name="";
}
else {
	$file_name = rand(1,10000).$_FILES['image']['name'];
}
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $supported_image = array('gif','jpg','jpeg','png');
  $folder = "./img/" . $file_name;



$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

  //echo $ext; 
// Using strtolower to overcome case sensitive



	$query = $con->query("INSERT INTO images_b set  
	name='$file_name'") or die(mysqli_error($con));

	move_uploaded_file( $file_tmp, $folder);
	//echo "<script>alert('Transaction is successfull')</script>";
	echo '<meta http-equiv="Refresh" content="0; url=?upload_b">';
  }
  
  
	}



	function DeleteUploadb(){
	
		$con= dbcon();
	if(isset($_GET['id'])){
		
		
		$del=$_GET['id'];
		$image=$_GET['image'];
	
	$query =$con->query("DELETE FROM images_b WHERE id='$del' ") or die(mysqli_error($con));
	unlink("img/$image");
	echo '<meta http-equiv="Refresh" content="0; url=?upload_b">';
	

	
	}
}


				
			
	
	