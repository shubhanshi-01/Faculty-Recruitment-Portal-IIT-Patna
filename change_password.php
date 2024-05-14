<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css"> 
    <title>Change Password</title>
</head>
<body>
    <div id="change-password-container" class="change-password-container">
    <h2>Change Password</h2>
    <form action="./includes/change_password.inc.php" method="post" class="change-password-form">
        <label for="oldPassword">Old Password:</label>
        <input type="password" id="oldPassword" name="oldPassword" required><br>

        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" required><br>

        <label for="confirmPassword">Confirm New Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br>

        <button type="submit" id="submitch" name="submit">Change Password</button>
    </form>
    </div>


</body>
</html>
