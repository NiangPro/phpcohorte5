<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);
    echo " 
        Prenom: $prenom <br>
        Nom: $nom <br>
        Pays: $pays <br>
    ";
}else{
    echo "Veuillez cliquer sur le bouton ajouter";
} 
?>
<a href="formulaire.php?retour=form">Retour</a>