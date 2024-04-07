<?php
    require_("Includes/Classes/FormSanitizer.php")
    if(isset($_POST["submitButton"])){
        $firstName =FormSanitizer::sanitizeFormString($_POST['firstName']);

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
                <img src="Assets/Images/3def453e5906fed4f3e38cf791e6cb6b.png" title="Logo" alt= "Site Logo"/>
                <h3> Sign Up</h3>
                <span>to continue to DevFlix</span>
                

            </div>

            <form method="POST"> 
                <input type ="text" name = "firstName" placeholder = "First Name" required>
                <input type ="text" name = "lastName" placeholder = "Last Name" required>
                <input type ="text" name = "userName" placeholder = "Username" required>
                <input type ="email" name = "email" placeholder = "Email" required>
                <input type ="email" name = "email2" placeholder = "Confirm Email" required>
                <input type ="password" name = "password" placeholder = "Password" required>
                <input type ="password" name = "password2" placeholder = "Confirm Password" required>
                <input type ="submit" name = "submitButton" value = "Submit" required>

                

            </form>
            <a href="login.php" class="signInMessage">Already have an Account? Sign in here!</a>
            </div>

        </div>
            <?
            ?>
        </body>
    </head>

</html>
