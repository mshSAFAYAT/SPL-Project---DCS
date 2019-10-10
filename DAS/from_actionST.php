<?php 
  include('config/db_connect.php'); 
   
?>

<?php

	$user=$_REQUEST['email'];   
	$pass=$_REQUEST['password'];
	$sql="select * from student where EMAIL='$user' and PASSWORD='$pass'";
	$result=mysqli_query($con, $sql);
	$count=mysqli_num_rows($result);
	
	if ($count!=0) {
		$_SESSION["user"]=$user;
		echo "wellcome0 ".$_SESSION["user"];
         header('Location: student.php');
	} else {
		echo "Error creating table: ";
	}

?>