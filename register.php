<?php
require_once("Includes/config.php");
require_once("Includes/Classes/Account.php");
require_once("Includes/Classes/FormSanitizer.php");
require_once("Includes/Classes/Constants.php");

    $account = new Account($con);


     if(isset($_POST["submitButton"])){
        $firstName =FormSanitizer::sanitizeFormString($_POST['firstName']);
        $lastName = FormSanitizer::sanitizeFormString($_POST['lastName']);
        $userName = FormSanitizer::sanitizeFormUsername($_POST['userName']);
        $email = FormSanitizer::sanitizeFormEmail($_POST['email']);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST['email2']);
        $password =FormSanitizer::sanitizeFormPassword($_POST['password']);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST['password2']);

        $success=$account->register($firstName, $lastName, $userName, $email, $email2, $password, $password2);

        if($success == true){
            //Store Session
            $_SESSION["userLoggedIn"]=$userName;
            header("Location: index.php");
        }
        
    }

    function getInputValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }

        
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
                <?php echo $account->getError(Constants::$firstNameCharacters);?>
                <input type ="text" name = "firstName" placeholder = "First Name" value="<?php getInputValue("firstName");?>"required>

                <?php echo $account->getError(Constants::$lastNameCharacters);?>
                <input type ="text" name = "lastName" placeholder = "Last Name" value="<?php getInputValue("lastName");?>"required>

                <?php echo $account->getError(Constants::$userNameCharacters);?>
                <?php echo $account->getError(Constants::$userNameTaken);?>
                <input type ="text" name = "userName" placeholder = "Username" value="<?php getInputValue("userName");?>" required>

                <?php echo $account->getError(Constants::$emailsDontMatch);?>
                <?php echo $account->getError(Constants::$emailInvalid);?>
                <?php echo $account->getError(Constants::$emailTaken);?>
                <input type ="email" name = "email" placeholder = "Email" value="<?php getInputValue("email");?>"required>
                
                <input type ="email" name = "email2" placeholder = "Confirm Email" value="<?php getInputValue("email2");?>"required>
                <?php echo $account->getError(Constants::$passwordsDontMatch);?>
                <?php echo $account->getError(Constants::$passwordTooShort);?>
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
