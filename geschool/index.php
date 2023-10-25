<?php 

require_once("models/database.php");

$classes = getAllClasses();

 require_once("includes/entete.php");

   
// routeur 
if (isset($_GET["page"]) && $_GET["page"] == "classe") {
    # code...
    require_once("controllers/classController.php");
}else{
    require_once("controllers/accueilController.php");

}


require_once("includes/pied.php");
