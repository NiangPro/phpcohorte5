<?php 


try {
    
    $db = new PDO("mysql:dbname=gesschool;host=localhost", "root", "");
} catch (PDOException $th) {
    die("Erreur :".$th->getMessage());
}


function getAllClasses()
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM classe order by nom DESC");

        $q->execute();
    
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur :".$th->getMessage());
    }
   
}


function addClasse($nom, $taille)
{
    global $db;

    try {
        $q = $db->prepare("INSERT INTO classe(nom, taille) VALUES(:nom, :taille)");

        return $q->execute([
            "nom" => $nom,
            "taille" => $taille
        ]);
    } catch (PDOException $th) {
        die("Erreur :".$th->getMessage());
    }
}