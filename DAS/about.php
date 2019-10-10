<html>
    <head>
        <title>Web Developing</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <style type="text/css">
            #contact{
                color: blue;
                text-align: center;   
                font-size: 21px;
                 }
            #new{
                font-size: 20px;
                background-color: #DBE5FC;
            }
            #loginbox{
                margin-top: 30px;
                padding-top: 26px;
                height: 500px;
                width: 550px;
            }
        </style>
    </head>
    <body>
    	<form action="form_action.php" method="POST">
        <header>
      
            <!-- <h1>Sign in to DAS</h1> -->
        </header>
        <div id="loginbox">
            <label id="login">
                <h2>ABOUT</h2>
                 <p><h3>This is an web based application where teachers can create classes and students can join them. Teachers can take attendance through the application. The percentage of attendance will be calculated. It will generate a pdf of Attendance report which is supposed to send to student through mail(not completed).</h3> </p>
               <!-- <input type="text" name="email"> -->
            </label>
            <label id="password">
                <!-- <p>Password <a href="#"></a></p>
                <input type="password" name="password"> -->
            </label>
            <!-- <a href = "form_action.php"><input type="submit" value="Log in"></a>
            <div id="new"> -->
                <p><a href="index.php" style="color: white;text-align:center;" id="contact" >BACK</a></p>
            </div>
            <div id="list">
               
            
            </div>
        </div> 
         </form> 
    </body>
</html>