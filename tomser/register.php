<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomser - Register</title>
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

        .success-message {
            background-color: rgb(58, 168, 50);
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            position: absolute;
            top: 20px;
            left: 10px;
            transition: 2s;

        }

        .success-message a {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loginsection">
            <h2>Register</h2>
            <form action="" method="post">
                <input type="text" placeholder="Login/Email" name='login' id='login'>
                <input type="password" placeholder="New Password" name='password' id='password'>
                <input type="submit" value="Register">
            </form>
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </div>
    </div>
    <script>
        // JavaScript function to hide the error message after 10 seconds
        document.addEventListener("DOMContentLoaded", function() {
            var errorMessage = document.querySelector('.error-message');
            if (errorMessage) {
                setTimeout(function() {
                    errorMessage.style.display = 'none';
                }, 4000); // 40 seconds (40000 milliseconds)
            }
            var successMessage = document.querySelector("body > div.success-message");
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 8000); // 40 seconds (40000 milliseconds)
            }
        });
    </script>
</body>

</html>

<?php
// Include database.php to establish a connection
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form data is submitted
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Check if login and password are not empty
    if (!empty($login) && !empty($password)) {

        // Check if the user with the same login already exists
        $checkUserQuery = "SELECT * FROM users WHERE login = '$login'";
        $result = $conn->query($checkUserQuery);

        if ($result->num_rows > 0) {
            // User with the same login already exists
            echo '<div class="error-message">An account with this login already exists. Please choose a different login or <a href="login.php">login to existing account</a>.</div>';
        } else {
            // Insert data into the database
            $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to index.php after successful insertion
                echo '<div class="success-message">Account has been created successfully. Click to <a href="login.php">login now</a></div>';
                exit(); // Ensure that no further code is executed
            } else {
                // Display error message at the top of the page
                echo '<div class="error-message">' . "Error: " . $sql . "<br>" . $conn->error . '</div>';
            }
        }
    } else {
        // Display error message at the top of the page
        echo '<div class="error-message">Please enter Login and password to continue.</div>';
    }
}

// Close connection
if (isset($conn)) {
    $conn->close();
}
?>


<!-- Your other HTML content goes here -->