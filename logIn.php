<?php
require_once("Includes/config.php");
require_once("Includes/Classes/FormSanitizer.php");
    if(isset($_POST["submitButton"])){
        echo "Form was Submitted";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to DevFlix</title>
        <link rel="stylesheet" type="text/css" href="Assets/Style/style.css"/>

        <body><div class="signInContainer">

            <div class="column">
            
            <div class="header">
                <img src="Assets/Images/DevFlixLogo.png" title="Logo" alt= "Site Logo"/>
                <h3> Sign In</h3>
                <span>to continue to DevFlix</span>
                

            </div>

            <form method="POST"> 
                <input type ="text" name = "userName" placeholder = "Username" required>
               
                <input type ="password" name = "password" placeholder = "Password" required>
                
                <input type ="submit" name = "submitButton" value = "Submit" required>

                

            </form>
            <a href="register.php" class="signInMessage">Need an Account? Sign Up Here!</a>
            </div>

        </div>
            <?
            ?>
        </body>
    </head>

</html>