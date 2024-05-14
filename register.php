<?php
require_once './includes/config_session.inc.php';
require_once './includes/register_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIT Patna Faculty Recruitment Portal</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">

</head>
<body>
    <div>
        <h1>INDIAN INSTITUTE OF TECHNOLOGY PATNA</h1>
        <!-- <img src="./images/logo.png" alt="IIT Patna Logo" class="logo"> -->
    </div>
    <div class="head">
        <h2>FACULTY RECRUITMENT PORTAL</h2>
    </div>
    <div class="form-container">
        <h2>CREATE YOUR PROFILE</h2>
        <img src="./images/logo.png" class="logo">
        <div class="registration-form">
            <form action="./includes/register.inc.php" method="POST" >
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" ><br><br>

                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" ><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" ><br><br>

                <label for="cast-category">Select Cast Category:</label>
                <select id="cast-category" name="cast-category">
                    <option value="General">General</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                    <option value="EWS">EWS</option>
                    <option value="PWD">PWD</option>
                </select><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password"  ><br><br>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" ><br><br>

                <input type="submit" value="Submit">
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
            <?php
            check_register_errors();
            ?>
        </div>
        
</body>
</html>