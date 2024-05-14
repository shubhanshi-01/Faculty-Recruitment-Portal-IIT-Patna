<?php

declare(strict_types=1);

function get_email(object $pdo,string $email){
    $query ="SELECT Email FROM users WHERE Email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo , string $firstname,string $lastname, string $email, string $cast,string $pwd){
    $query ="INSERT INTO users (first_name,last_name,Email,Cast,pwd) VALUES (:firstname,:lastname,:email,:cast,:pwd);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd=password_hash($pwd,PASSWORD_BCRYPT,$options);
    $stmt->bindParam(":firstname",$firstname);
    $stmt->bindParam(":lastname",$lastname);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":cast",$cast);
    $stmt->bindParam(":pwd",$hashedPwd);
    $stmt->execute();
}