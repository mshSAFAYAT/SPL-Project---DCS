<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
// echo "$id";

$show_user = "select * from (SELECT *  from teacher) as result where EMAIL='$id'";
$result = mysqli_query($con, $show_user)->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <link rel="stylesheet" type="text/css" href="teacher.css">
 <style type="text/css">
    #head{
      height: 30px;
      background-color: #87b4d478;
      padding-top: 0px;
    }
    #loginbar{
      padding-top: 2px;
      text-align: right;
    }
    .btn{
      height: 80px;
    }
    #loginbox{
      width: 650px;
    }
    input[type="submit"]{
    	text-align: : center;
    }
  </style>
<body>
	 <section id="head">
        <div id="loginbar"><label>
        	<a align="left">Welcome : <?php echo $result['NAME']; ?>~~</a>
      <a align ="right" class="btn" style="background-color: #DBE5FC ;text-align: right" href="index.php">LOG IN</a>
           <a class="btn" style="background-color: #DBE5FC" href="chooseTS.php">BACK PAGE</a></label>
       </div></section>
	<div id="loginbox">
		<h1 align="center">  TEACHER</h1>
	<h2>Profile of : <?php echo $result['NAME']; ?></h2>
	<h2> Teacher ID: <?php echo $result['t_ID']; ?></h2>
	<!-- <h2>Email of Teacher: <?php echo $result['EMAIL']; ?></h2> -->
	<!-- <h2>Contact : <?php echo $result['CONTRACT']; ?></h2> -->
	<form action="" method="POST">
		<label id="login">
                <p>CLASS ID :
                <input type="text" name="class_id">
                COURSE ID:
                <input type="text" name="course_id"></p>
                <p>TITLE  :
                <input type="text" name="TITLE">
                CREDIT:
                <input type="text" name="CREDIT"></p>
            </label>
		   <div><input type="submit" name="submit" value="ADD NEW CLASS"></div>

		
	</form>

	<?php  
$fk =1;
$submit=NULL;
if(isset($_POST['submit']))
{
  $cl_ID=$_POST['class_id'];
  $co_ID=$_POST['course_id'];
  $TITLE=$_POST['TITLE'];
  $CREDIT=$_POST['CREDIT'];

  $t_ID=$result['t_ID'];
    echo $result['t_ID']; 
$con=mysqli_connect("localhost", "root", "", "DAS");
 $sql7="select * from teacher_class where cl_ID='$cl_ID'";
  $result7=mysqli_query($con, $sql7);
  $count=mysqli_num_rows($result7);
  if($count!=0){
    echo "<h2>Class already taken </h2> ";
  }else{
  	echo "NOT";
$query_cl="INSERT INTO classes(cl_ID) VALUES('$cl_ID')";
$query="INSERT INTO teacher_class(t_ID,cl_ID) VALUES('$t_ID','$cl_ID')";
$query_co="INSERT INTO course(co_ID,TITLE,CREDIT) VALUES('$co_ID','$TITLE','$CREDIT')";
$query2="INSERT INTO class_course(co_ID,cl_ID) VALUES('$co_ID','$cl_ID')";


  $result=mysqli_query($con,$query);
  $result_cl=mysqli_query($con,$query_cl);
  $result=mysqli_query($con,$query2);
  $result_cl=mysqli_query($con,$query_co);
}
   header('Location: teacher.php');

}
?>


<?php
$t_ID=$result['t_ID'];
	$show_query = "select * from (SELECT *  from teacher_class) as result where t_ID='$t_ID'";

        $result2 = mysqli_query($con, $show_query);
        $i = 0;
        while ($row = mysqli_fetch_assoc($result2)) {
            $books[] = $row;
            $i++;
        }

        $serial_no = 0;
?>
			<div >
                    <table >
                        <tr >
                            <th>#</th>                       
                            <th><p>CLASS CODE</p></th>
                
                        </tr>


                        <?php
                        if ($i != 0) {
                            foreach ($books as $book) {
                                $serial_no++;
                                ?>
                                <tr>
                                <td><?php echo $serial_no; ?></td>                                
                                   
                       				<!-- <td align="left"><a  href="class_session.php?id=<?php echo $book['cl_ID']; ?>"><?php echo $book['cl_ID']; ?></a> -->
                       					<form action="class_session.php" method="POST">
                       					  <td><input style="width: 50px;" type="submit" name="class" value="<?php 
              	echo $book['cl_ID'];?>"></td>

                       					</form>
                       					<!-- <?php
										echo '<a href="classroom.php?compna='.urlencode($book['cl_ID']).'">'.$book['cl_ID'].'</a>';
                       					?> -->
                                    
                                </tr>
                                <?php
                             
                            }
                        }
                        ?> 	
                    </table>
                </div>    
        </div>    
</body>
</html>