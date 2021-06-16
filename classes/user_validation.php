<?php
include_once "getuser.php";
include_once "validator.php";
class Validation {
    public function checkUser () {
        if (isset($_POST['submit'])) {
            $this->printError();
        }
    }

    public function printError () {
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();

        if ($errors) {
            return $errors;
        } else {
            header("Refresh:1; subscribed.php");
            $new_user = new NewUser();            
            exit();
        }
    }
}


