<?php 

if (isset($_POST["ajouter"])) {
    extract($_POST);

    if (addClasse($nom, $taille)) {
        return header("Location: ?page=classe");
    }
}





if (isset($_GET["type"])) {
    # code...
    require_once("views/addclasse.php");
}else{

    require_once("views/classe.php");
}
