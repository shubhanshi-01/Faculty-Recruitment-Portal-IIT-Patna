<?php

declare(strict_types=1);

function is_input_empty(string $firstname,string $lastname,string $email,string $pwd,string $confirmpwd){
    if(empty($firstname) || empty($lastname) || empty($email) || empty($pwd) || empty($confirmpwd)){
        return true;
    }else{
        return false;
    }
}

function is_email_invalid(string $email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

function is_email_taken(object $pdo,string $email){
    if(get_email($pdo,$email)){
        return true;
    }else{
        return false;
    }
}

function is_confirmpwd_diff(string $pwd,string $confirmpwd){
    if($pwd!=$confirmpwd){
        return true;
    }else{
        return false;
    }
}

function create_user(object $pdo , string $firstname,string $lastname, string $email, string $cast,string $pwd){
    set_user($pdo , $firstname,$lastname, $email, $cast, $pwd);
}





