<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$cl_ID = $_SESSION["class"];
//echo $cl_ID;
//echo $id;

$show_user = "select * from (SELECT *  from teacher) as result where EMAIL='$id'";
$result = mysqli_query($con, $show_user)->fetch_assoc();


$sql2 = "SELECT DISTINCT student.s_ID,student.NAME,student.EMAIL,teacher_class.cl_ID FROM STUDENT,teacher, teacher_class,student_class 
where STUDENT.s_ID=student_class.s_ID
and student_class.cl_ID=teacher_class.cl_ID
and teacher_class.t_ID=teacher.t_ID
and teacher_class.cl_ID='$cl_ID'
and teacher.EMAIL='$id'
order by student.s_ID;";

$result2 = mysqli_query($con, $sql2);

$result3 = mysqli_query($con, $sql2)->fetch_assoc();
$cl_ID=$result3['cl_ID'];
   // echo $result3['cl_ID'];
// if($result2){
//    var_dump($result2);
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
    <!-- <link rel="stylesheet" type="text/css" href="choose1.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br><br>

<div class="midback" background="white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <label>
          <a class="btn btn-info" href="chooseTS.php">NEW STUDENT</a>
          <a align ="right" class="btn" style="background-color: #DBE5FC " href="index.php">LOG OUT</a>
          <a class="btn" style="background-color: #DBE5FC " href="classroom.php">BACK PAGE</a>
        </label>
        </div>  
        <div class="col-md-9">
        <h1>STUDENT LIST</h1>
        <table class="table">
          <thead>
            <th>S_ID</th>
            <th>NAME</th>
            <th>EMAIL</th> 
<!--             <th><input type="date" name="date" value="date"></th>
 -->
          </thead>
          <tbody>
            <?php 
          
            while ($row = mysqli_fetch_array($result2)) 
                 {?>
            
               <form action="" method="POST">
		<label id="login">
			<tr>
              <td ><input type="submit" name="sID" value="<?php 
              	echo $row['s_ID'];?>">
              	
              </td>
              
              <td><?php echo $row['NAME']?></td>
              <td ><?php echo $row['EMAIL']?></td>
             <!--  <td><input type="submit" name="attend" value="VIEW PERCENTAGE">VIEW</td> -->
                
            </label>
		
	</form>
              <!-- <td>
                <a class="btn" href="#">PRESENT</a>
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
       if(isset($_POST['attend']))
		{
		$t_ID=$result['t_ID'];
  	$attend=$_POST['attend'];
 	 $date=date_default_timezone_set("Asia/Dhaka");
 	 $s_ID=$_POST['sID'];
  	$date2=date("d-M-y");
  	echo "<br>";
      echo "<br> Date :";

    echo "$date2";
    $cl_ID=$result3['cl_ID'];
    //echo $result3['cl_ID'];
    $sql4 = "select DISTINCT * from class_course cc, course co where cc.co_ID=co.co_ID
    and cl_ID='22'";
    $result4 = mysqli_query($con, $sql4)->fetch_assoc();
    $co_ID=$result4['co_ID'];
    $TITLE=$result4['TITLE'];
    echo $result4['TITLE'];

    $sql5 = "INSERT INTO attendance(t_ID,co_ID,TITLE,s_ID,C_DATE) VALUES('$t_ID','$co_ID','$TITLE','$s_ID','$date2')";
     $result5 = mysqli_query($con, $sql5);
     
	}
	?>
  </div>
  </body>
</html>