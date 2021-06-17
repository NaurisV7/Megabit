<?php
include_once "getuser.php";
include_once "validator.php";
class Validation {
    
    private string $errors = '';

    public function validateUser (array $data) {
        $validation = new UserValidator($_POST);
        $errors = $validation->validateForm();
        if (!$errors) {
            header("Refresh:1; subscribed.php");
            $new_user = new NewUser();
            exit();
        }
        return $this->errors = $errors;
               
    }

    public function printError () {
            return $this->errors;
    }
}


