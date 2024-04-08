<?php
class Account{

    private $con;
    private $errorArray =array();
    public function __construct($con){
        $this->con =$con;


    }
    public function validateFirstName($fn){
        if(strlen($fn) < 2 || strlen($fn) > 25){
            array_push($this -> errorArray, "First name must be between 2 and 25 characters");

        }
    }
    public function getError($error){
        if(in_array($error, $this->errorArray)){
        return $error;
        }
    }
}
?>