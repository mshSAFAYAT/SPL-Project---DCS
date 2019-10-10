<?php
session_start();
 if(isset($_POST['sID'])){
       $s_ID=$_POST['sID'];
      // echo "$s_ID";
     }
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$cl_ID = $_SESSION["class"];
$_SESSION["s_ID"]=$s_ID;
$s_ID = $_SESSION["s_ID"];

// echo "<br>st<br>$s_ID";

 //echo $cl_ID;
$show_user = "select * from (SELECT *  from student) as result where s_ID='$s_ID'";
$result = mysqli_query($con, $show_user)->fetch_assoc();
$NAME=$result['NAME'];
// echo "n<br>$NAME";
 $sql4 = "select DISTINCT * from class_course cc, course co where cc.co_ID=co.co_ID and cl_ID='$cl_ID'";
    $result4 = mysqli_query($con, $sql4)->fetch_assoc();
    $co_ID=$result4['co_ID'];
    //echo $co_ID;
$sql1="select * from attendance where s_ID='$s_ID'
            and co_ID='$co_ID'";

        $result2 = mysqli_query($con, $sql1);
        $count2=mysqli_num_rows($result2);
        $newS=0;
        $i = 0;
        $A=0;
        $P=0;
        if ($count2==0) {
          $newS=1;
          // echo "<h1>NEW STUDENT</h2>";
        }elseif ($count2!=0) {
        
        while ($row = mysqli_fetch_assoc($result2)) {
            $books[] = $row;
            $i++;
        }
        foreach ($books as $book) {
                                if($book['attend']=='ABSENT')
                                     {
                                        $A++;
                                        $aIDs[]= $book['s_ID'];
                                      }
                                      elseif($book['attend']=='PRESENT')
                                     {
                                        $P++;
                                      }
                                  }
         $sum=0;
         $sum=$P/$i;  
         $percent=$sum*100;
          // echo "$percent%";  
         $con=mysqli_connect("localhost", "root", "", "DAS");
         $sql8="select * from report where s_ID='$s_ID' and cl_ID='$cl_ID'";
    $result8=mysqli_query($con, $sql8);
    $count8=mysqli_num_rows($result8);
    
    if ($count8!=0){
        // echo "can not";
      // echo "$percent%";
        $sql_rp="UPDATE report  SET percent = '$percent'  WHERE s_ID='$s_ID' and cl_ID='$cl_ID';";
    }elseif ($count8==0) {
        //echo "can ";

        $sql_rp="INSERT INTO report(s_ID,NAME,cl_ID,percent) VALUES('$s_ID','$NAME','$cl_ID','$percent')";

        $resultR=mysqli_query($con,$sql_rp); 
    } }
                         

?>

 <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
<link rel="stylesheet" type="text/css" href="choose1.css">
 <style type="text/css">
    #head{
      height: 35px;
      background-color: #87b4d478;
      padding-top: 0px;
    }
    #login{
      padding-top: 2px;
      text-align: right;
    }
    .btn{
      height: 10px;
    }
    #REPORT{
        color: #f9f9f9;
    }
    #box{
        background-color: #DBE5FC;
         position: absolute;
    left: 50%;
    transform: translate(-50%);
    width: 500px;
    height: 620px;
    border: 1px solid #d8dee2;
    border-radius: 3%;
    padding: 40px;
    font-size: 15px;
    font-weight: 600;
    }
  </style>
        <section id="head">
        <div id="login">
      <a align ="right" class="btn" style="background-color: #DBE5FC ;text-align: right" href="index.php">LOG IN</a>
           <a class="btn" style="background-color: #DBE5FC" href="studentpercent.php">BACK PAGE</a>
        <header></div></section>
            
        </header>
        <div id="box">
         
  
            <h1>REPORT OF STUDENT</h1>
            <h3>STUDENT NAME: <?php echo $result['NAME']; ?></h3>
            <h3>STUDENT ID: <?php echo $result['s_ID']; ?></h3>
             <?php if ($newS==1) {
            echo "<h3>NEW STUDENT</h3>";
          }elseif ($newS==0) {
            
            echo "<br>Total: $i<br>";
             echo "<br>ABSENT : $A<br>PRESENT :$P<br>";   ?>  
             <h3>PERCENTAGE: <?php echo $percent; ?>%</h3>     
             <div id="REPORT">
            <a style="background-color: #87b4d478 "  href = "createpdf5.php"> <input type="submit" value="CREATE PDF OF RECORD"></a>
          <?php }?>
            <!-- <a href = "nstudent.php"> <input type="submit" value="Student"></a> -->
        </div>
  </div>
</body>
    </html>