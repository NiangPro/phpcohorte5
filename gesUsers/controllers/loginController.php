<?php 

$message = "";
if (isset($_POST["login"])) {
    extract($_POST);

    $user = seconnecter($email, $mdp);

    if ($user) {
        $_SESSION["user"] = $user;
       return header("Location:?page=profil");
    }else{
        $message = "Email ou mot de passe incorrect";

    }
}


require_once("views/login.php");