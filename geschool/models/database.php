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

function addEleve($prenom, $nom, $datnais, $lieunais, $sexe, $tel, $idclasse, $profil)
{
    global $db;
    try {
        $q = $db->prepare("INSERT INTO eleve VALUES (null, :prenom, :nom, :datnais, :lieunais, :sexe, :tel, :idclasse, :profil)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "datnais" => $datnais,
            "lieunais" => $lieunais,
            "sexe" => $sexe,
            "tel" => $tel,
            "idclasse" => $idclasse,
            "profil" => $profil
        ]);
    }catch (PDOException $th) {
            die("Erreur :".$th->getMessage());
    }
}

function getEleveById($id)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM eleve WHERE id =:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur :".$th->getMessage());
    }
}

function getAllEleves()
{
    global $db;
    try {
        $q = $db->prepare("SELECT e.id as id, e.nom as nom, prenom, lieunais, datnais, sexe, tel, c.nom as nomclasse, profil
                        FROM eleve e, classe c
                        WHERE e.idclasse = c.id");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur :".$th->getMessage());
    }
}

function editEleve($id, $prenom, $nom, $datnais, $lieunais, $sexe, $tel, $idclasse)
{
    global $db;
    try{
        $q = $db->prepare("UPDATE eleve SET prenom=:prenom, nom=:nom, 
        datnais=:datnais, lieunais=:lieunais,
        sexe=:sexe, tel=:tel, idclasse=:idclasse
        WHERE id=:id");
    return $q->execute([
        "id"=>$id,
        "prenom"=>$prenom,
        "nom"=>$nom,
        "datnais"=>$datnais,
        "lieunais"=>$lieunais,
        "sexe"=>$sexe,
        "tel"=>$tel,
        "idclasse"=>$idclasse
    ]);

    } catch (PDOException $th) {
        die("Erreur :".$th->getMessage());
    }
}

function supprimeEleve($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM eleve WHERE id=:id");
        return $q->execute(["id"=>$id]);
    } catch (PDOException $th) {
        die("Erreur :".$th->getMessage());
    }
}