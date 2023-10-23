<?php 

session_start();

if (isset($_SESSION["client"])) {
    $client = $_SESSION["client"];

    echo "Prenom: ".$client["prenom"]."<br>";
    echo "Nom: ".$client["nom"]."<br>";
    echo "Pays: ".$client["pays"]."<br>";
}else{
    echo "<a href='formulaire.php'> Veuillez renseigner d'abord le formulaire </a>";
}


session_destroy();

