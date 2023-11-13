<?php 

require_once("models/database.php");

$classes = getAllClasses();

 require_once("includes/entete.php");

   
// routeur 
if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'eleve':
           
            require_once("controllers/eleveController.php");
            break;
            
            
        default:
            require_once("controllers/classController.php");
            break;
    }
}else{
    require_once("controllers/accueilController.php");

}


require_once("includes/pied.php");
