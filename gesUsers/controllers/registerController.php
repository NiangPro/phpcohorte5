<?php 


if (isset($_POST["create"])) {
    extract($_POST);
    if (addUser($prenom, $nom, $tel, $email, $mdp)) {
        return header("Location: ?page=login");
    }
}

require_once("views/register.php");