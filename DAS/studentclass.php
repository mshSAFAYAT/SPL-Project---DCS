<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "DAS");
$id = $_SESSION["user"];
$book= $id;
// echo "$book";
$cl=$_SESSION['class']; 
$show_user = "select * from (SELECT *  from student) as result where EMAIL='$id'";
$result = mysqli_query($con, $show_user)->fetch_assoc();

// echo "<br>$cl";
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
    #att{
       position: absolute;
    left: 50%;
    transform: translate(-50%);
    width: 400px;
    height: 400px;
    border: 1px solid #d8dee2;
    border-radius: 3%;
    padding: 40px;
    font-size: 22px;
    background-color: #c0cbd4e3;;
    font-weight: 600;

    /*position: absolute;
    left: 50%;
    width: 440px;
    height: 590px;
    background-color: #285575ad;*/
}
.h2{
  color: black;
}
.student{
  background-color: #d9edfbd6;
  width: 200px;
  height: 50px;
}
    .btn{
      height: 80px;
      background-color: #d9edfbd6;
          </style>
    <body>
      <section id="head">
        <div id="loginbar"><label>
          <a align="left">Welcome : <?php echo $result['NAME']; ?>~~</a>
      <a align ="right" class="btn" style="background-color: #DBE5FC ;text-align: right" href="index.php">LOG IN</a>
           <a class="btn" style="background-color: #DBE5FC" href="student.php">BACK PAGE</a></label>
       </div></section>
 <div class="loginbox">
        <div id="att">
         <!--  <section id="head">
          <label>
  <a class="btn" href="index.php">LOG OUT</a>
           <a class="btn" href="student.php">BACK PAGE</a></label></section> -->
        <!-- Input Part -->
        <form action="" method="post" enctype="multipart/form-data">
            <div >
               <div class="student"><a class="col-md-2" href="studentlistST.php?id=<?php echo $book; ?>"> <h2>STUDENTS</h2>
<!--                 <input class="col-md-2" type="submit"  name="student_button" value=""></a></div>
 -->              
                 
            </div>

        </form>
        
    <!-- </ul> -->
        </div>
    </div>

    </body>
</html>