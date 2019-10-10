<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$cl_ID = $_SESSION["class"];
// $compname = $_SESSION["compna"];
 //echo "$cl_ID<br>";
// if(isset($_POST['class'])){
//       $c=$_POST['class'];
//       //echo "<br>$c";
//     }
//echo $id;
// echo "<br>$c";


$show_user = "select * from (SELECT *  from teacher) as result where EMAIL='$id'";
$result = mysqli_query($con, $show_user)->fetch_assoc();

// $sql2 = "SELECT DISTINCT student.s_ID,student.NAME,teacher_class.cl_ID,course.TITLE FROM STUDENT,teacher, teacher_class,student_class ,class_course,course
// where STUDENT.s_ID=student_class.s_ID
// and student_class.cl_ID=teacher_class.cl_ID
// and teacher_class.t_ID=teacher.t_ID
// and teacher_class.cl_ID=class_course.cl_ID
// and class_course.co_ID=course.co_ID
// and teacher_class.cl_ID='$cl_ID'
// and teacher.EMAIL='$id';";
 $sql5= "select * from class_course,course where class_course.co_ID=course.co_ID and class_course.cl_ID='$cl_ID'";

$result5 = mysqli_query($con, $sql5)->fetch_assoc();

$sql2 = "SELECT DISTINCT student.s_ID,student.NAME,student.EMAIL,teacher_class.cl_ID FROM STUDENT,teacher, teacher_class,student_class 
where STUDENT.s_ID=student_class.s_ID
and student_class.cl_ID=teacher_class.cl_ID
and teacher_class.t_ID=teacher.t_ID
and teacher_class.cl_ID='$cl_ID'
and teacher.EMAIL='$id'
order by student.s_ID;";
$result2 = mysqli_query($con, $sql2);

$result3 = mysqli_query($con, $sql2)->fetch_assoc();
$cl_ID=$result5['cl_ID'];
//echo "CLASS ID :";
    //echo $result5['cl_ID'];
    $TITLE=$result5['TITLE'];
//echo "CLASS TITLE :";
    //echo $result3['TITLE'];
// if($result2){
//   // var_dump($result2);
// }
// else{
//   echo "fetching failed";
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      #roll{
         border: 1px solid #0f2e44de
      }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <br><br><br>


    <div class="container">
      <div class="row">
        <div class="col-md-4">
        	
          	<!-- <a class="btn btn-info" href="nstudent.php">NEW STUDENT</a> -->
			<a class="btn btn-info"  style="  border: 1px solid #0f2e44de" href="index.php">LOG OUT</a>
           <a class="btn btn-info" style="  border: 1px solid #0f2e44de"href="classroom.php">BACK PAGE</a>
      <!--  </label><br> -->
       <label><h6 style="font-size: 20" >CLASS ID :<?php echo $cl_ID  ?>
           ~~ CLASS TITLE :<?php echo $result5['TITLE']?></h6>
           <!-- <a class="btn" style=" border: 1px solid #0f2e44de"href="">TEACHER EMAIL :<?php echo $id ?></a> -->
         </label>
         
          <label> 
        </div>  
        <div class="col-md-9">
          <label>
        <h1>STUDENT LIST</h1>
        </label>
        <table class="table">
          <thead>
            <th>S_ID</th>
            <th>NAME</th>
            <th>ATTENDANCE</th> 
            <form action="" method="POST">
            <th>
              <!-- <input type="date" name="date" value="date"><input type="submit" name="submit" value="DATE"> -->
              <?php
            $date2=date("Y-m-d");
            echo "DATE : $date2"?></th></form>

          </thead>
          <tbody>
            <?php 
          
            while ($row = mysqli_fetch_array($result2)) 
                 {?>
               <form action="" method="POST">
		<label id="login">
			<tr>
              <td ><input  id="roll" name="sID" value="<?php 
              	echo $row['s_ID'];?>">
              	
              </td>
              
              <td><?php echo $row['NAME']?></td>
              <td><input type="submit" type="radio" name="attend" value="PRESENT">!!<input type="submit" name="attend" value="ABSENT"></td>
                
            </label>
		
	</form>
              <!-- <td>
                <a class="btn" href="#">ABSENT</a>

              </td> -->
            </tr>
          <?php } 
        
        ?>
          </tbody>
        </table>
 
      </div>
      </div>
      
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	<?php  
		$fk =1;
		$attend=NULL;
    if(isset($_POST['date'])){
      $d=$_POST['date'];
      echo "$d";
    }
       if(isset($_POST['attend']))
		{
  // $cl_ID=$result3['cl_ID'];
  //   echo "$cl_ID"; 
  //   echo "<br>";
		$t_ID=$result['t_ID'];
    	//echo $result['t_ID'];
  	$attend=$_POST['attend'];
 	 $date=date_default_timezone_set("Asia/Dhaka");
 	 $s_ID=$_POST['sID'];
  	$date2=date("Y-m-d");
  	//echo "$attend";
  	echo "<br>";
    // echo "$s_ID"; 
    //   echo "<br>";

    //echo "$date2";
    $cl_ID=$result3['cl_ID'];
    //echo $result3['cl_ID'];
        
    $sql4 = "select DISTINCT * from class_course cc, course co where cc.co_ID=co.co_ID
    and cl_ID='$cl_ID'";
    $result4 = mysqli_query($con, $sql4)->fetch_assoc();
    $co_ID=$result4['co_ID'];
    $TITLE=$result4['TITLE'];
    echo $result4['co_ID'];

    $sql7="select * from attendance where s_ID='$s_ID' and t_ID='$t_ID' and co_ID='$co_ID' and C_DATE='$date2'";
  $result7=mysqli_query($con, $sql7);
  $count=mysqli_num_rows($result7);

  if($count!=0){
  	
    echo "<h5>Attendance already taken </h5> ";
  }else{

    $sql5 = "INSERT INTO attendance(t_ID,co_ID,TITLE,s_ID,C_DATE,attend) VALUES('$t_ID','$co_ID','$TITLE','$s_ID','$date2','$attend')";
     $result5 = mysqli_query($con, $sql5);
      if($result5){
      	//echo "done";
         echo "$s_ID";
   }
 	else{
   	echo "fetching failed";
 	}
} }
	?>
  
  </body>
</html>