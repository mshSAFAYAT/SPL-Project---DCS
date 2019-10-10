<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$book= $id;

$cl=$_SESSION['class']; 
// echo "$cl";

if(isset($_POST['class'])){
      $c=$_POST['class'];
      
    }
?>
<!DOCTYPE html>
<html>
          <link rel="stylesheet" type="text/css" href="teacher.css">
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
    #box1{
        background-color: #DBE5FC;
        height: 200px;
        text-align: center;
        font-size: 30px;
        /*color: black;*/
    }
  </style>
    <body>
        <section id="head">
        <div id="loginbar">
          <a class="btn" style="background-color: #DBE5FC" href=""> <?php echo $book; ?>~~LOGGED IN~~</a>
       <a class="btn" style="background-color: #DBE5FC" href="chooseTS.php">SIGN IN</a>
      <a align ="right" class="btn" style="background-color: #DBE5FC ;text-align: right" href="index.php">LOG OUT</a>
           <a class="btn" style="background-color: #DBE5FC" href="teacher.php">BACK PAGE</a>
        </div></section>
 <div class="loginbox">
        <div id="box">
       <!--      <label>
    <a class="btn" href="index.php">LOG OUT</a>
           <a class="btn" href="classroom.php">BACK PAGE</a></label>
        <!-- Input Part --> <br><br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <div id="box1" >
               <a class="btn" style="background-color: #DBE5FC" href="attendance.php?id=<?php echo $book; ?>">Take Attendance </a><br><br>
               <a class="btn" style="background-color: #DBE5FC" href="studentlist.php?id=<?php echo $book; ?>"> STUDENTS</a><br><br>
               <a  href="attendstatics.php?id=<?php echo $book; ?>">VIEW STATISTICS</a>

                 <!-- <input class="col-md-2" type="submit"  name="s_button" value="Edit Profile">
                 
                <input class="col-md-2" type="submit" name="search_button" value="Search"> -->
            </div>

        </form>
        
    <!-- </ul> -->
        </div>
    </div>

    </body>
</html>