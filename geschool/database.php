<?php 


try {
    
    $db = new PDO("mysql:dbname=gesschool;host=localhost", "root", "");
} catch (PDOException $th) {
    die("Erreur :".$th->getMessage());
}


function getAllClasses()
{
    global $db;
     $q = $db->prepare("SELECT * FROM classe");
     $q->execute();

     return $q->fetchAll();
}