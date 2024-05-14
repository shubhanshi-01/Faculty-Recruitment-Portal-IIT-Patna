<?php 
    require_once './includes/config_session.inc.php';
    require_once './includes/login_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIT Patna Faculty Recruitment Portal - Login</title>
    <link rel="stylesheet" href="./style.css"> <!-- Link to your combined CSS file -->
</head>
<body>
    <div>
        <h1>INDIAN INSTITUTE OF TECHNOLOGY PATNA</h1>
    </div>
    <div class="head">
        <h2>FACULTY RECRUITMENT PORTAL</h2>
    </div>
    <!-- <div class="head">
        <h2>LOGIN TO YOUR ACCOUNT</h2>
    </div> -->
    <div class="login-container">
        <h2>LOGIN TO YOUR ACCOUNT</h2>
        <img src="./images/logo.png" class="logo2">
        <div class="login-form">
            <form action="./includes/login.inc.php" method="POST">
                <label for="email" id="mar">Email:</label>
                <input type="email" id="email" name="email" ><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" r><br><br>

                <input type="submit" value="Login">

                <!-- Link to the register page -->
                <p id="reg">Don't have an account? <br><a href="./register.php" style="color:#1e90ff;">    Register here</a></p>
            </form>
            <?php 
            check_login_errors();
            ?>
        </div>
    </div>
</body>
</html>
