<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    if (addEleve($prenom, $nom, $datnais, $lieunais, $sexe, $tel, $idclasse)) {
        return header("Location: ?page=eleve");
    }
}

if (isset($_POST["editer"])) {
    extract($_POST);

    if (editEleve($id, $prenom, $nom, $datnais, $lieunais, $sexe, $tel, $idclasse)) {
        return header("Location: ?page=eleve");
    }
}

$eleves = getAllEleves();

$classes = getAllClasses();

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $e = getEleveById($_GET["id"]);
    }
    require_once("views/addEleve.php");
}else{

    require_once("views/eleve.php");
}