<?php
session_start();
$con = mysqli_connect('127.0.0.1','root','');
$id = $_SESSION["user"];
$cl_ID = $_SESSION["class"];
$s_ID = $_SESSION["s_ID"];

date_default_timezone_set("Asia/Dhaka");
$date=date("d-M-y");

if(!$con)
{
echo "not connected";
}

if(!mysqli_select_db($con,'das'))
{
echo "database not connected";
}

$sql = "select * from report where s_ID='$s_ID' and cl_ID='$cl_ID'";

$records = mysqli_query($con,$sql);
$records2 = mysqli_query($con,$sql)->fetch_assoc();
// echo $records['percent'];
require("fpdf181/fpdf.php");

$pdf = new fpdf('p','mm','letter');

$pdf-> addpage();
$pdf-> setfont("arial","b","20");

while($row = mysqli_fetch_array($records) ){
	$p=$row['percent'];
	$pdf-> cell(0,10,"Attendance Report",0,1,"C");
	if ($p<75) {
		$pdf-> cell(0,10,"Warning Letter",0,1,"C");
	}elseif ($p==75) {
		$pdf-> cell(0,10,"Warning Letter",0,1,"C");
	}
	$pdf-> setfont("arial","b","14");
	$pdf-> cell(0,10," $date,",0,1,"c");
$pdf-> cell(0,10,"To $row[NAME],",0,1,"c");
$pdf-> cell(0,10,"Student id : $row[s_ID]",0,1,"c");
$pdf-> cell(0,10,"Class id : $row[cl_ID]",0,1,"c");

if ($p<75) {
	# code...
$pdf-> write("10"," Assalamualaikum ,Your attendance is $row[percent]% which is below 75%. As a result you can't seat for the final exam.So you are requested to take permission from the department head.","");
}
elseif ($p==75) {
	$pdf-> write("10"," Assalamualaikum ,Your attendance is $row[percent]% which is at the bottom line(75%).So you cannot miss class further. Otherwise you can't seat for the final exam without taking permission from the department head.","");
}
elseif ($p>75) {
	
	$pdf-> write("10"," Assalamualaikum ,Your attendance is $row[percent]% which is good.So be regular in class.","");
}
$sql4 = "select * from teacher where EMAIL='$id'";
    $result4 = mysqli_query($con, $sql4)->fetch_assoc();
     $t_ID=$result4['t_ID'];
    $NAME=$result4['NAME'];
    $pdf-> cell(0,10," ",0,1,"c");
     $pdf-> cell(0,10," ",0,1,"c");
    $pdf-> cell(0,10," TEACHER :",0,1,"c");
$pdf-> cell(0,10," $NAME",0,1,"c");
}
$pdf->output();

?>