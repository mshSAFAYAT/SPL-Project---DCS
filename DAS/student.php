<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
// echo "$id";


$show_user = "select * from (SELECT *  from student) as result where EMAIL='$id'";
$result = mysqli_query($con, $show_user)->fetch_assoc();

?>

<?php  
$fk =1;
$submit=NULL;
if(isset($_POST['submit']))
{
  $cl_ID=$_POST['class_id'];
  $s_ID=$result['s_ID'];
    echo $result['s_ID']; 
$con=mysqli_connect("localhost", "root", "", "DAS");
$sql7="select * from student_class where cl_ID='$cl_ID' and s_ID='$s_ID'";
  $result7=mysqli_query($con, $sql7);
  $count=mysqli_num_rows($result7);
  if($count!=0){
    echo "<h2>Class already taken </h2> ";
  }else{
    $sql8="select * from classes where cl_ID='$cl_ID'";
  $result8=mysqli_query($con, $sql8);
  $count8=mysqli_num_rows($result8);
        if($count8==0){
    echo "<h2>NO Class </h2> ";
        }else{
        $query="INSERT INTO student_class(s_ID,cl_ID) VALUES('$s_ID','$cl_ID')";

  $result=mysqli_query($con,$query);
        }       }
  header('Location: student.php');

}
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
    #loginbox{
        text-align: center;
        background-color: #f9f9f9c7;
        width: 690px;
    }
    .btn{
      height: 80px;
    }
    #login{
      text-align: left;
    }
  </style>
<body>
     <section id="head">
        <div id="loginbar">
      <a align ="right" class="btn" style="background-color: #DBE5FC ;text-align: right" href="index.php">LOG IN</a>
           <a class="btn" style="background-color: #DBE5FC" href="index.php">BACK PAGE</a>
        </div></section>
    <div id="loginbox">
        <h1 align="center"> STUDENT </h1>
	<h2>Profile of : <?php echo $result['NAME']; ?></h2>
	<h2>STUDENT ID : <?php echo $result['s_ID']; ?></h2>
	<!-- <h2>Profile of : <?php echo $result['EMAIL']; ?></h2> -->
	<form action="" method="POST">
		<label id="login">
                <p>CLASS ID:
                <input type="text" name="class_id"></p>
            </label>
		   <div><input  type="submit" name="submit" value="ADD NEW CLASS"></div>

		
	</form>


<?php
$s_ID=$result['s_ID'];
	$show_query = "select * from (SELECT *  from student_class) as result where s_ID='$s_ID'";

        $result2 = mysqli_query($con, $show_query);
        $i = 0;
        while ($row = mysqli_fetch_assoc($result2)) {
            $books[] = $row;
            $i++;
        }
        $show_query2 = "select * from course,class_course where course.co_ID=class_course.co_ID ";

        $result22 = mysqli_query($con, $show_query2);
        $j = 0;
        while ($row = mysqli_fetch_assoc($result22)) {
            $books2[] = $row;
            $j++;
        }

        $serial_no = 0;
?>
<div ><label>
                    <table >
                        <tr >
                            <td>#</td>                       
                            <td>CLASS CODE</td>
                
                        </tr>
                        <?php
                        if ($i != 0) {
                            foreach ($books as $book) {
                                $serial_no++;
                                ?>
                                <tr>
                                    <td><?php echo $serial_no; ?></td>                                
                                   
                                    <form action="class_sessionST.php" method="POST">
                                          <td><input style="width: 50px;" type="submit" name="class" value="<?php 
                echo $book['cl_ID'];?>"></td>

                                        </form>
                                    
                                </tr>
                                <?php
                            }
                        }
                        ?> 	
                    </table>
                    <h3>*AVAILABLE CLASSES :</h3>           
                              <table >
                      
                        <tr >
<!--                             <td align="right">#</td>                       
 -->                            <td align="right">CLASS CODES</td><td></td><td></td>

                            <td align="right">COURSE CODE</td><td></td><td></td>
                            <td align="right">TITLE</td>
                
                        </tr>
                        <?php
                        if ($j != 0) {
                            $serial_no2=0;
                            foreach ($books2 as $book2) {
                                $serial_no2++;
                                ?>
                                <tr>
                                    <!-- <td align="right"><?php echo $serial_no2; ?></td>  -->                               
                                   
                                    <td align="right"><a  href=""><?php echo $book2['cl_ID']; ?></a></td>
                                    <td></td><td></td>
                                    <td align="right"><a  href=""><?php echo $book2['co_ID']; ?></a></td>
                                    <td></td><td></td>
                                    <td align="right"><a  href=""><?php echo $book2['TITLE']; ?></a></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>  
                    </table>
                </label>
                </div>   
                </div>     
</body>
</html>

