<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$book= $id;
echo "$book";
$class=$_REQUEST['class']; 
$_SESSION["class"]=$class;
echo "<br>$class";
header('Location: studentclass.php');
if(isset($_POST['class'])){
      $c=$_POST['class'];
      
    }
?>