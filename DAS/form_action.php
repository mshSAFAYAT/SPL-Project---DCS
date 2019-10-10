<?php 
  include('config/db_connect.php'); 
   
?>

<?php

	$user=$_REQUEST['email'];   
	$pass=$_REQUEST['password'];
	$sql="select * from teacher where EMAIL='$user' and PASSWORD='$pass'";
	$result=mysqli_query($con, $sql);
	$count=0;
	$count=mysqli_num_rows($result);

	$sql2="select * from student where EMAIL='$user' and PASSWORD='$pass'";
	$result2=mysqli_query($con, $sql2);
	$count2=0;
	$count2=mysqli_num_rows($result2);

	if ($count!=0) {
		$_SESSION["user"]=$user;
		$_SESSION["pass"]=$pass;
		echo "wellcome0 ".$_SESSION["user"],$_SESSION["pass"];
         header('Location: teacher.php');
	}elseif ($count2!=0) {
		$_SESSION["user"]=$user;
		echo "wellcome0 ".$_SESSION["user"];
         header('Location: student.php');
	} 
	else {
		echo "Error creating table: ";
	}

?>