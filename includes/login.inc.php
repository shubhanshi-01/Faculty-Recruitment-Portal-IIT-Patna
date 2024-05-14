<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $email=$_POST["email"];
    $pwd=$_POST["password"];
    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // ERROR HANDLERS
        $errors =[];
        if(is_input_empty($email,$pwd)){
            $errors["empty_input"]="Fill in all fields!";
        }
        $result=get_user($pdo,$email);

        if(is_email_wrong($result)){
            $errors["login_incorrect"]="Invalid login info!";
        }

        if(!is_email_wrong($result) && !is_password_correct($pwd,$result["pwd"])){
            $errors["password_diff"]="Password is invalid";
        }

        require_once 'config_session.inc.php';

        if($errors){
            $_SESSION["errors_login"]=$errors;
            header("Location: ../login.php");
            die();
        }

        $newSessionId=session_create_id();
        $sessionId = $newSessionId."_".$result["user_id"];
        session_id($sessionId);

        $_SESSION["user_id"]=$result["user_id"];
        $_SESSION["user_email"]=htmlspecialchars($result["Email"]);
        $_SESSION["last_regeneration"] = time();

        header("Location: ../page1.php");
        $pdo=null;
        $statement=null;

        die();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }
}else{
    header("Location: ../login.php");
    die();
}