<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    $img = $_FILES["profil"]["tmp_name"];
    $img_name = uniqid().".jpg";
    if (addEleve($prenom, $nom, $datnais, $lieunais, $sexe, $tel, $idclasse, $img_name)) {
       move_uploaded_file($img, "images/".$img_name);
        return header("Location: ?page=eleve");
    }
}

if (isset($_POST["editer"])) {
    extract($_POST);

    if (editEleve($id, $prenom, $nom, $datnais, $lieunais, $sexe, $tel, $idclasse)) {
        return header("Location: ?page=eleve");
    }
}

if (isset($_GET["delete"])) {
    if (supprimeEleve($_GET["delete"])) {
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