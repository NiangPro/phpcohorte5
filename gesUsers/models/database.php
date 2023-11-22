<?php

try {
    $db = new PDO("mysql:dbname=gesuser;host=localhost", "root", "");
} catch (PDOException $th) {
    echo "Erreur: ".$th->getMessage();
}

function addUser($prenom, $nom, $tel, $email, $mdp)
{
    global $db;
    try {
        $q = $db->prepare("INSERT INTO user VALUES(null, :prenom, :nom, :tel, :email, :mdp)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "tel" => $tel,
            "email" => $email,
            "mdp" => $mdp
        ]);
    } catch (PDOException $th) {
        echo "Erreur: ".$th->getMessage();
    }
}

function seconnecter($email, $mdp)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM user WHERE email=:email AND mdp=:mdp");
        $q->execute([
            "email" => $email,
            "mdp" => $mdp
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
        
    }  catch (PDOException $th) {
        echo "Erreur: ".$th->getMessage();
    }
}