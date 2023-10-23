<?php 

    session_start();

    if (isset($_POST["ajouter"])) {
        
        $_SESSION["client"] = $_POST;

        header("Location:profil.php");

    }