<?php
class loginValidator{
    private $email;
    private $password;
    private $errors = [];

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function validate(){
        $this->validateEmail();
        $this->validatePassword();
        return $this->errors;
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