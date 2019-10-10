<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$book= $id;
$cl_ID = $_SESSION["class"];
 // echo "$cl_ID<br>";
//echo "$book";

$show_user = "select * from (SELECT *  from teacher) as result where EMAIL='$id'";
$result = mysqli_query($con, $show_user)->fetch_assoc();


?>
<?php  
 
// $con=mysqli_connect("localhost", "root", "", "DAS");
// $sql1="select * from attendance where t_ID='$book'
// and C_DATE='$date'";
//   $result1=mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="attendstatics.css">
    <style type="text/css">
    #head{
      height: 30px;
      background-color: #d9edfbd6;
      padding-top: 0px;
    }
    #loginbar{
      padding-top: 2px;
      text-align: right;
    }
    .btn{
      height: 80px;
    }
    #PER{
    	align-self: center;
    	height: 25px;
    	width: 200px;
    	text-align: center;
    	background-color: #d9edfbd6;
    }
  </style>
<body>
        <section id="head">
        <div id="loginbar">
       <a class="btn" style="background-color: #DBE5FC" href="chooseTS.php">SIGN IN</a>
      <a align ="right" class="btn" style="background-color: #DBE5FC ;text-align: right" href="index.php">LOG OUT</a>
           <a class="btn" style="background-color: #DBE5FC" href="classroom.php">BACK PAGE</a>
        </div></section>
	<div id="box">
	<label>
	<!-- <a class="btn" href="index.php">LOG OUT</a>
           <a class="btn" href="choose.php">BACK PAGE</a> -->
    </label>

	<form action="" method="POST">
		<label id="login">
                <p>DATE:</p>
			<input type="date" name="date" value="date">    
			        </label>
		   <div><input type="submit" name="submit" value="DATE"></div><br>
		   <h3>FOR INDIVIDUAL STUDENT</h3>
		   <div id="PER"> <a class="btn" href="studentpercent.php">STUDENT PERCENTAGE</a></div>
 
	</form>


<?php
$t_ID=$result['t_ID'];
$fk =1;
$submit=NULL;
if(isset($_POST['submit']))
{
  $date=$_POST['date'];
	// echo "$t_ID";
 // 	 echo "$book";
     echo "<br>REPORT :<br>";
    echo "<br>DATE :";
	 echo "$date"; 
		$con=mysqli_connect("localhost", "root", "", "DAS");
		$sql4 = "select DISTINCT * from class_course cc, course co where cc.co_ID=co.co_ID
    and cl_ID='$cl_ID'";
    $result4 = mysqli_query($con, $sql4)->fetch_assoc();
    $co_ID=$result4['co_ID'];
    // echo "$co_ID";
    // echo "$t_ID";
    //     echo "$date";


			$sql1="select * from attendance where t_ID='$t_ID'
			and C_DATE='$date' and co_ID='$co_ID'";

        $result2 = mysqli_query($con, $sql1);
        $i = 0;
        $A=0;
        $P=0;
        while ($row = mysqli_fetch_array($result2)) {
            $books[] = $row;
            $i++;
            
        }
        echo "<br>";

        $serial_no = 0;
?>
<div >
               <table >
                        <tr >
                            <!-- <td>#</td>                       
                            <td>REPORT</td> -->
                
                        </tr><tr>
                        <?php

                        if ($i != 0) {
                            foreach ($books as $book) {
                                $serial_no++;
                                if($book['attend']=='ABSENT')
           							        {
            							       $A++;
            							     $aIDs[]= $book['s_ID'];
          							         }
          							  elseif($book['attend']=='PRESENT')
           							 {
            							$P++;
                          $pIDs[]= $book['s_ID'];
          							  }
                                ?></tr>
                                <!-- <tr>
                                    <td><?php echo $serial_no; ?></td>                                
                                   
                       				<td align="left"><a  href="classroom.php?id=<?php echo $book['s_ID']; ?>"><?php echo $book['s_ID']; ?></a></td>
                                </tr> -->
                            </table>
                          
                                <?php
                            }	echo "Total: $i<br>";
                                 echo "<br>ABSENT : $A<br>PRESENT :$P<br>";
                        ?>
                        <br>
                          <table>
                            	<tr>
                                	<th>Absent Student IDs :<br></th></tr>

                        <?php
                      }else  {
                        echo "<h3>ATTENDANCE NOT TAKEN</h3>";
                      }
                        $serial_no=0;
                        if ($i != 0) {
                        foreach ($aIDs as $aID) {
                        		
                                $serial_no++;
                                ?>
                                  <tr> <td><?php echo $serial_no; ?></td>                                
<!--                                    	<td align="center"><a  href="classroom.php?id=<?php echo $aID; ?>"><?php echo $aID; ?></a></td>
 -->
                       				<td align="center"><?php echo $aID; ?></td>
                                    
                                </tr>
                                <?php
                            }
                        }
                }
                        ?> 	
                    </table>
           </div> 
           </div>  
</body>
</html>