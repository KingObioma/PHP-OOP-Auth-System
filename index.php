<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Frontend/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Labrada:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <title>My Form</title>
</head>

<body>
    <div class="form">
        <div class="tabs">
            <button class="registerButton tabButton active" data-target="signup">Sign Up</button>
            <button class="tabButton loginButton" data-target="login">Log in</button>
        </div>
        <div id="signup" class="form-section active">
            <div class="header">
                <h2>Sign Up For Free</h2>
            </div>
            <form action="Backend/registerHandler.php" method="post">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 main-divs">
                        <input type="text" name="firstName" class="form-control" id="myInput" placeholder="First Name*"
                            value="<?php if(isset($_SESSION['firstName'])){echo $_SESSION['firstName'];}?>" required>
                        <?php if(isset($_SESSION) && isset($_SESSION['errors'])){$errors = $_SESSION['errors'];if(isset($errors['firstName'])){echo '<span style="color:  rgb(0, 128, 92)">' . $errors['firstName'] .'</span> <br>';}}?>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-6 main-divs">
                        <input type="text" name="lastName" class="form-control myInput" id="myInput"
                            placeholder="Last Name*"
                            value="<?php if(isset($_SESSION['lastName'])){echo $_SESSION['lastName'];}?>" required>
                        <?php if(isset($_SESSION) && isset($_SESSION['errors'])){$errors = $_SESSION['errors'];if(isset($errors['lastName'])){echo '<span style="color:  rgb(0, 128, 92)">' . $errors['lastName'] .'</span> <br>';}}?>

                    </div>
                </div>
                <div class="main-divs">
                    <input type="email" name="email" class="form-control myInput" id="myInput"
                        placeholder="Email Address*"
                        value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" required>
                    <?php if(isset($_SESSION) && isset($_SESSION['errors'])){$errors = $_SESSION['errors'];if(isset($errors['email'])){echo '<span style="color:  rgb(0, 128, 92)">' . $errors['email'] .'</span> <br>';}}?>

                </div>
                <div class="main-divs">
                    <input type="email" name="email" class="form-control myInput" id="myInput"
                        placeholder="Email Address*"
                        value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>" required>
                    <?php if(isset($_SESSION) && isset($_SESSION['errors'])){$errors = $_SESSION['errors'];if(isset($errors['email'])){echo '<span style="color:  rgb(0, 128, 92)">' . $errors['email'] .'</span> <br>';}}?>

                </div>
                <div class="main-divs">
                    <div class="input-group" id="show_hide_password">
                        <input type="password" name="password" class="form-control myInput" aria-label="Password"
                            id="passwordInput" placeholder="Password*"
                            value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password'];}?>" required>
                        <span class="input-group-text toggle-password"
                            style="background-color: transparent; border-radius: 1px; z-index: 10;"><i
                                class="fas fa-eye-slash text-white"></i></span>
                    </div>
                    <?php if(isset($_SESSION) && isset($_SESSION['errors'])){$errors = $_SESSION['errors'];if(isset($errors['password'])){echo '<span style="color:  rgb(0, 128, 92)">' . $errors['password'] .'</span> <br>';}}?>
                </div>
                <button class="submitButton" name="submit">GET STARTED</button>
            </form>
        </div>

        <div id="login" class="form-section">
            <div class="header">
                <h2>Log In</h2>
            </div>
            <form id="loginForm" action="Backend/loginHandler.php" method="post">
                <div class="main-divs">
                    <input type="email" name="email" class="form-control myInput" id="myInput"
                        placeholder="Email Address*" required>
                    <?php if(isset($_SESSION) && isset( $_SESSION['emailError'])){echo '<span style="color:  rgb(0, 128, 92)">' .   $_SESSION['emailError'] .'</span> <br>';}?>
                </div>
                <div class="input-group" id="show_hide_password_2">
                    <input type="password" name="password" class="form-control myInput" aria-label="Password"
                        id="passwordInput_2" placeholder="Password*" required>
                    <span class="input-group-text toggle-password"
                        style="background-color: transparent; border-radius: 1px; z-index: 10;"><i
                            class="fas fa-eye-slash text-white"></i></span>
                </div>
                <?php if(isset($_SESSION) && isset( $_SESSION['passwordError'])){echo '<span style="color:  rgb(0, 128, 92)">' .   $_SESSION['passwordError'] .'</span> <br>';}?>
                <button class="submitButton" type="submit" style="margin-top: 20px;" name="submit">SIGN IN</button>
            </form>
        </div>
        <script src="Frontend/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>
<?php
//  session_destroy();

?>

</html>