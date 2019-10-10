<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="nteacher.css">
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
  </style>
</head>
    <body>
    <div>
    <form action="" method="post">
      <section id="head">
        <div id="loginbar">
      <a align ="right" class="btn" style="background-color: #DBE5FC ;text-align: right" href="index.php">LOG IN</a>
           <a class="btn" style="background-color: #DBE5FC" href="chooseTS.php">BACK PAGE</a>
        <header></div></section>
            <h1>Create account as Student</h1>
        </header>
      <div id="loginbox">
         <label id="login">
          <p>Student ID</p>
                <input type="text" name="studentId">
            </label>
            <label id="login">
                <p>Name</p>
                <input type="text" name="Name">
            </label>
         
         <label id="login">
                <p>Email Address</p>
                <input type="text" name="Email">
            </label>
         <label id="login">
                <p>Password</p>
                <input type="password" name="Password">
            </label>
         <label id="login">
                <p>Contact</p>
                <input type="text" name="contract">
            </label>
        <div> <input type="submit" name="submit" value="Create Account"></div>
      </div>
  </form>
  </div>
  

  <?php 
$fk =1;
$submit=NULL;
if(isset($_POST['submit']))
{
  $t_id=$_POST['studentId'];
  $tName=$_POST['Name'];
  $Email=$_POST['Email'];
  $pass=$_POST['Password'];

$con=mysqli_connect("localhost", "root", "", "DAS");
$sqln="select * from student where s_ID='$t_id'";
  $resultn=mysqli_query($con, $sqln);
  $countn=0;
  $countn=mysqli_num_rows($resultn);
  if (countn!=0) {
    header('Location: nstudent.php');
  }
$query="INSERT INTO student(s_ID,NAME,EMAIL,PASSWORD) VALUES('$t_id','$tName','$Email','$pass')";


  $result=mysqli_query($con,$query);
           header('Location: index.php');

}


   ?>
   </body>
</html>