<?php
require_once("Includes/config.php");
require_once("Includes/Classes/Account.php");
require_once("Includes/Classes/FormSanitizer.php");
require_once("Includes/Classes/Constants.php");

$account = new Account($con);


    if(isset($_POST["submitButton"])){
        
        $userName = FormSanitizer::sanitizeFormUsername($_POST['userName']);
        
        $password =FormSanitizer::sanitizeFormPassword($_POST['password']);
        

        $success=$account->login($userName, $password);

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
                <h3> Sign In</h3>
                <span>to continue to DevFlix</span>
                

            </div>

            <form method="POST"> 
                <?php echo $account->getError(Constants::$loginFailed);?>
                <input type ="text" name = "userName" placeholder = "Username"  value="<?php getInputValue("userName");?>"required>
               
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