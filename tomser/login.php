<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomser - Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .error-message {
            background-color: #ffdddd;
            color: #ff0000;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            position: absolute;
            top: 20px;
            left: 10px;
            transition: 2s;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loginsection">
            <h2>Login</h2>
            <form method="post" action="">
                <input type="text" placeholder="Login/Email" name='login' id='login'>
                <input type="password" placeholder="Password" name='password' id='password'>
                <input type="submit" value="Login">
            </form>
            <p>Dont have an account? <a href="register.php">Register now</a></p>
        </div>
    </div>
    <script>
        // hide the error message after 10 seconds
        document.addEventListener("DOMContentLoaded", function() {
            var errorMessage = document.querySelector('.error-message');
            if (errorMessage) {
                setTimeout(function() {
                    errorMessage.style.display = 'none';
                }, 4000);
            }
        });
    </script>
</body>

</html>


<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    // prevent SQL injection
    $stmt = $conn->prepare("SELECT password FROM users WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->bind_result($dbPassword);
    $stmt->fetch();
    $stmt->close();

    // Check if the login exists and verify the password
    if ($dbPassword !== null && $password === $dbPassword) {
        session_start(); 

        // Storing data in the session
        $_SESSION['user_login'] = $login;
        header("Location: index.php");
        exit();
    } else {
        echo '<div class="error-message">Invalid login credentials. Try again!</div>';
    }
}
$conn->close();
?>