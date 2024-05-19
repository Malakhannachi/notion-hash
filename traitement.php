<?php

if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "register":
            $pdo = new PDO("mysql:host=localhost;dbname=hash,charset=utf8", "root", "");
            $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
            $pass1 = filter_input(INPUT_POST, "pass1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $pass2 = filter_input(INPUT_POST, "pass2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

           
           
           
           
            break;
        
        default:
            # code...
            break;
    }
}