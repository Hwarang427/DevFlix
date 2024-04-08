<?php
require_once("Includes/config.php");
require_once("Includes/Classes/Account.php");
require_once("Includes/Classes/FormSanitizer.php");

    $account = new Account($con);


     if(isset($_POST["submitButton"])){
        $firstName =FormSanitizer::sanitizeFormString($_POST['firstName']);
        $lastName = FormSanitizer::sanitizeFormString($_POST['lastName']);
        $userName = FormSanitizer::sanitizeFormUsername($_POST['userName']);
        $email = FormSanitizer::sanitizeFormEmail($_POST['email']);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST['email']);
        $password =FormSanitizer::sanitizeFormPassword($_POST['password']);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST['password']);

        $account ->validateFirstName($firstName);
        
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
                <h3> Sign Up</h3>
                <span>to continue to DevFlix</span>
                

            </div>

            <form method="POST"> 
                <?php echo $account->getError("First name must be between 2 and 25 characters");?>
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
