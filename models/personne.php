<?php 

class Personne {
    // propriètés 
    public $prenom;
    public $nom;
    public $sexe;
    public $age;

    // constructeur 
    public function __construct($prenom, $nom, $sexe, $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->age = $age;
    }

    // methodes 
    public function afficher()
    {
        echo "
        Prenom:  $this->prenom <br> 
        Nom:  $this->nom <br> 
        Sexe:  $this->sexe <br> 
        Age:  $this->age <br> 
        ";
    }
}

class Etudiant extends Personne{
   public $matricule;
   
   public function __construct($prenom, $nom, $sexe, $age, $matricule)
   {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->age = $age;
        // parent::__construct($prenom, $nom, $sexe, $age);
        $this->matricule = $matricule;

   }
    public function afficheInfo(){
           $this->afficher(); 
           echo "Matricule: $this->matricule";
    }
}

$p1 = new Personne("Bassirou", "Niang", "Masculin", 34);
$p2 = new Personne("Samba", "Diallo", "Masculin", 120);

$et1 = new Etudiant("Alioune", "Ndiaye", "Masculin", 12, "eeddd12");

echo $p2->afficher();
echo $p1->afficher();
echo $et1->afficheInfo();