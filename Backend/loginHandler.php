<?php
// session_start();
// if(isset($_POST['submit'])){
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//      require_once "../Connection/connect.php";
//      require_once "../Classes/loginValidation.php";
//      require_once "../Classes/loginUser.php";
//      $validator = new loginValidator($email,$password);
//      $noError = $validator->validate();
     
//     if(empty($noError)){  
//         $cleanEmail = trim(htmlspecialchars($email));
//         $userManager = new userManager($db, $cleanEmail, $password);
//         $result = $userManager->selectClientByEmail($cleanEmail);
//         if ($result) {
//             $row = $result;
//             $verifiedPassword = password_verify($password, $row["password"]);
//             if ($verifiedPassword) {
//                 $_SESSION["loginId"] = $row["id"];
//                 $_SESSION["firstName"] = $row["first_name"];
//                 $_SESSION["lastName"] = $row["last_name"];
//                 $_SESSION["email"] = $row["email"];
//                 header("Location: ../user.php");
//             }else{
//                 $_SESSION['passwordError'] = "Wrong Password";
//                 header("Location: ../index.php");
//             }
//         } else {
//         $_SESSION['errors'] = $noError;
//         $_SESSION['email'] = $email;
//         $_SESSION['password'] = $password;
//         $_SESSION['emailError'] = "This user does not exist";
//         header("Location: ../index.php");
//         }
//     }else{
//         $_SESSION['errors'] = $noError;
//         $_SESSION['email'] = $email;
//         $_SESSION['password'] = $password;
//         header('location: ../index.php');
//     }    
// }