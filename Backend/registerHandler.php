<?php
session_start();
if(isset($_POST['submit'])){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

     require_once "../Connection/connect.php";
     require_once "../Classes/signupValidation.php";
     require_once "..\Classes\singnupUser.php";
     $validator = new signupValidator($firstName,$lastName,$email,$password);
     $noError = $validator->validate();
     
    if(empty($noError)){  
        $cleanFirstName = trim(htmlspecialchars($firstName));
        $cleanLastName = trim(htmlspecialchars($lastName));
        $cleanEmail = trim(htmlspecialchars($email));
        $cleanPassword = trim(htmlspecialchars(password_hash($password, PASSWORD_DEFAULT)));

        $addUser = new userManager($db, $cleanFirstName, $cleanLastName, $cleanEmail, $cleanPassword);
        $addUser->addUser();
        session_destroy();
        header('location: ../user.php');
    }else{
        $_SESSION['errors'] = $noError;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('location: ../index.php');
    }    
}