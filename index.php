<?php
session_start();
$motdepasse ="hpmlk10987654321";
$motdepasse2 = "hpmlk10987654321"; 
$hash = password_hash($motdepasse, PASSWORD_DEFAULT);
$hash2 = password_hash($motdepasse2, PASSWORD_DEFAULT);
//echo $hash."<br>";
//echo $hash2;

$saisie = "hpmlk10987654321";
$user = "malouka";
$verify = password_verify($saisie, $hash);
//var_dump($verify);
if ($verify == true){
    echo "mot de passe correct ";
    $_SESSION['user'] = $user;
    echo $_SESSION['user'];
}
else {
    echo "mot de passe incorrect ";
}
