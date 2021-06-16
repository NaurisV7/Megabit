<?php

class UserValidator {

    private $data;
    private $errors = "";
    private $fields = ['email', 'checkbox'];

    public function __construct($post_data) {
        $this->data = $post_data;         
    }

    public function validateForm (){

        $this->validateEmail();
        $this->checkCheckbox();
        return $this->errors;
    }

    private function validateEmail () {
        
        $val = trim($this->data['email']);

        if(empty($val)){
            $this->addError('Email address is required');
        } else if(!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this->addError('Please provide a valid e-mail address');
        } else {
            if(substr($this->data['email'], -3) == ".co"){
                $this->addError('We are not accepting subscriptions from Colombia emails');
            }
        }
    }

    private function checkCheckbox () {
        if(!isset($_POST['checkbox'])){
            $this->addError('You must accept the terms and conditions');
        } 
    }

    private function addError ($val) {
        $this->errors = $val;
    }

}