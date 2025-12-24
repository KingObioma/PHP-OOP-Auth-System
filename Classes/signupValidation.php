<?php
class signupValidator{
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $errors = [];

    public  function __construct($firstName, $lastName, $email, $password){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public function validate(){
        $this->validateFirstName();
        $this->validateLastName();
        $this->validateEmail();
        $this->validatePassword();
        return $this->errors;
    }

    // validate first name and last name
    private function validateFirstName(){
        if(empty($this->firstName)){
            $this->errors['firstName'] = "First name is required";
        }elseif(str_word_count($this->firstName) > 1){
            $this->errors['firstName'] = "Only one word is allowed";
        }elseif(!ctype_alpha($this->firstName)){
            $this->errors['firstName'] = 'Only letters are allowed';
        }elseif (strlen($this->firstName) > 50) {
            $this->errors['firstName'] = 'Nothing more than 50 letters';
        }
    }

    private function validateLastName(){
        if(empty($this->lastName)){
            $this->errors['lastName'] = "last name is required";
        }elseif(sizeof(explode(' ',$this->lastName)) > 1){
            $this->errors['lastName'] = "Only one word is allowed";
        }elseif(!ctype_alpha($this->lastName)){
            $this->errors['lastName'] = 'Only letters are allowed';
        }elseif (strlen($this->lastName) > 50) {
            $this->errors['lastName'] = 'Nothing more than 50 letters';
        }
    }

    // validate email input
    private function validateEmail(){
        if(empty($this->email)){
            $this->errors['email'] = "email is required";
        }elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] = "invalid email format";
        }
    }
    
    // validate password input
    private function validatePassword(){
        if(empty($this->password)){
            $this->errors['password'] = "password is required";
        }elseif(strlen($this->password) < 8){
            $this->errors['password'] = "Password must be at least 8 characters long.";
        }
    }    
}