<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $user = $_POST["user"];
    $pwd = $_POST["pwd"];
    $address = $_POST["address"];
    $Birhtdate= $_POST["Birthdate"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyinputSignup($name,$email,$user,$pwd,$address) !== false){
        header("location: .../register.html?error=emptyinput");
        exit();
    }
    if(invalidUser($user) !== false){
        header("location: .../register.html?error=invaliduid");
        exit();
    }
    if(invalidEMAIL($email) !== false){
        header("location: .../register.html?error=invalidumail");
        exit();
    }
    if(uidExists($conn, $user) !== false){
        header("location: .../register.html?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $user, $pwd, $address);
}
else {
     header("location: ../Register.html");
}
