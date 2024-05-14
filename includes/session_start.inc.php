<?php
require_once('config_session.inc.php'); 


// Check if the user is logged in, redirect if not
if (!isset($_SESSION["user_id"])) {
  header("Location: ../login.php"); // Redirect to login page if not logged in
  exit();
}
?>
