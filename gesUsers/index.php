<?php 
session_start();
// session_destroy();
require_once("models/database.php"); 
require_once("includes/header.php"); 

if (isset($_GET["page"]) && isset($_SESSION["user"])) {
    switch ($_GET["page"]) {
        case 'register':
            require_once("controllers/registerController.php");
            break;
        case 'profil':
            require_once("controllers/profilController.php");
            break;
        default:
            require_once("controllers/loginController.php");
            break;
    }
}else{
    require_once("controllers/loginController.php");
}


require_once("includes/footer.php"); ?>
 