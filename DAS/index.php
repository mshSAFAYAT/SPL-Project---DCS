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
        </style>
    </head>
    <body>
    	<form action="form_action.php" method="POST">
        <header>
      
            <h1>Sign in to DAS</h1>
        </header>
        <div id="loginbox">
            <label id="login">
                <p> Email address</p>
                <input type="text" name="email">
            </label>
            <label id="password">
                <p>Password <a href="#"></a></p>
                <input type="password" name="password">
            </label>
            <a href = "form_action.php"><input type="submit" value="Log in"></a>
            <div id="new">
                <p>New to DAS? <a href="chooseTS.php" id="contact" >Create an account.</a></p>
            </div>
            <div id="list">
                <ul>
                    <!-- <li class="m3"><a href="#">Terms</a></li>
                    <li class="m3"><a href="#">Privacy</a></li>
                    <li class="m3"><a href="#">Security</a></li> -->
                    <li class="m3"><a href="about.php" style="background-color: #DBE5FC " id="contact">ABOUT</a></li>
                </ul>
            </div>
        </div> 
         </form> 
    </body>
</html>