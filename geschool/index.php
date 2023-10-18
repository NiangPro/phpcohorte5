<?php 

 require_once("entete.php");

    
if (isset($_GET["page"]) && $_GET["page"] == "classe") {
    # code...
    require_once("classe.php");
}else{
    require_once("accueil.php");

}


require_once("pied.php");
