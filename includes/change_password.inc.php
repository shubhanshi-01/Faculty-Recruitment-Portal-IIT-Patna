<?php
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    require_once 'dbh.inc.php'; // Include database connection file

    // Get user ID from session (assuming it's stored as 'user_id')
    $user_id = $_SESSION['user_id'];

    // Get form data
    $old_password = $_POST['oldPassword'];
    $new_password = $_POST['newPassword'];
    $confirm_password = $_POST['confirmPassword'];

    // Validate input (e.g., check if new password matches confirm password)
    if ($new_password != $confirm_password) {
        // Handle password mismatch error
        echo "New password and confirm password do not match.";
    } else {
        // Hash the new password before updating in the database (assuming you're using password hashing)
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Query to update password in the database
        $sql = "UPDATE users SET pwd = :pwd WHERE user_id = :user_id";

        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['pwd' => $hashed_password, 'user_id' => $user_id]);

        // Check if the password was successfully updated
        if ($stmt->rowCount() > 0) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password.";
        }
    }
    header("Location: ../login.php");
} else {
    // Redirect to the change password form if accessed directly
    header("Location: change_password_form.php");
    exit();
}
?>
