<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $firstname=$_POST["first-name"];
    $lastname=$_POST["last-name"];
    $email=$_POST["email"];
    $cast=$_POST["cast-category"];
    $pwd=$_POST["password"];
    $confirmpwd=$_POST["confirm-password"];
    
    try {
        require_once 'dbh.inc.php';
        require_once 'register_model.inc.php';
        require_once 'register_contr.inc.php';

        // ERROR HANDLERS
        $errors =[];
        if(is_input_empty($firstname,$lastname,$email,$pwd,$confirmpwd)){
            $errors["empty_input"]="Fill in all fields!";
        }
        if(is_email_invalid($email)){
            $errors["invalid_email"]="Invalid email used!";
        }
        if(is_email_taken($pdo,$email)){
            $errors["email_used"]="Email already registered!";
        }
        if(is_confirmpwd_diff($pwd,$confirmpwd)){
            $errors["password_diff"]="Passwords do not match!";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_register"]=$errors;
            header("Location: ../register.php");
            die();
        }

        create_user($pdo , $firstname,$lastname, $email, $cast, $pwd);

        header("Location: ../register.php?register=success");
        $pdo=null;
        $stmt=null;


    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
    

}else{
    header("Location: ../register.php");
    die();
}