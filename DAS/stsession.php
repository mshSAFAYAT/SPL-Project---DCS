<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$cl_ID = $_SESSION["class"];
$book= $id;
echo "$book";
$_SESSION["class"]=$class;
echo "<br>$class";
 if(isset($_POST['sID'])){
       $s_ID=$_POST['sID'];
      echo "$s_ID";
      $_SESSION["s_ID"]=$s_ID;
     }

header('Location: S1percent.php');
if(isset($_POST['class'])){
      $c=$_POST['class'];
      
    }
?>