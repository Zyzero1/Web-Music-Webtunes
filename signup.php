<?php 
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['pass']; 

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {

            $query = "insert into form (user, email, pass) values ('$username', '$email', '$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> 
                    alert('Successfully Registered');
                    window.location.href = 'login.php'; // Redirect to login.php
                  </script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Signup</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="webtunes.png" alt="Logo">
            <h2>Webtunes</h2>
        </div>

    </header>

    <div class="wrapper-register">
        <div class="form-box register">
            <h2>Registration</h2>
            <form method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="user" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="pass" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="login.php" >Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>