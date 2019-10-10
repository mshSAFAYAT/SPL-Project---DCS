<?php

session_start();
 if(isset($_POST['sID'])){
       $s_ID=$_POST['sID'];
      // echo "$s_ID";
     }
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$cl_ID = $_SESSION["class"];
$s_ID = $_SESSION["s_ID"];

// echo "<br>st<br>$s_ID";

// echo $cl_ID;
// $pdf = new fpdf();
// $t="aa";


// $pdf-> addpage();


// $pdf->setfont("arial","b","20");
// $pdf->cell(0,10,"Warning Letter",0,1,"C");
// $pdf->cell(0,10,"To the students who attended less then 75% '$t'",0,1,"C");
require("fpdf/fpdf.php");
$pdf= new fpdf('p','mm','letter');
$pdf->addpage();

$pdf->output();
 $pdf->setfont("arial","b","20");
$pdf->write("10","Student ID $s_ID","");

$pdf->output();

?>
 
