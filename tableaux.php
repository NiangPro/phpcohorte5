<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux en php</title>
</head>
<body>
    <?php 

        echo "<pre>";
        $tab = ["modou", "fatou"];
        $tab = array("pathe", "abdou");

        $person = ["prenom" =>"Alioune", "nom" =>"Diallo", "age" =>25, "Feminin"];

        $entiers = [12, -7, 8, 20];
        echo $tab[0];
        echo $tab[count($tab) - 1];

        // ajout dans le tableau 
        array_push($tab, "DIallo");
        array_unshift($tab, "Tall");
        $tab[] = "Diop";

        // pour supprimer le dernier élèment 
        array_pop($tab);
        // pour supprimer le premier élèment 
        array_shift($tab);

        if(in_array("abdou", $tab)){
            echo "Prenom trouvé";
        }else{
            echo "Prenom introuvable";
        }

        // sort($entiers);
        ksort($tab);
        print_r($tab);


        print_r($entiers);

        echo $person["prenom"];

        print_r($person);
        echo $person["age"];
        

        $cles = array_keys($person);
        $valeurs = array_values($person);

        print_r($valeurs);

        foreach($person as $cle =>$val){
            echo "$cle => $val<br>";
        }
        echo "</pre>";

    ?>

    <script>
        let tab = ["modou", "fatou"];

        console.log(tab[0]);
        console.log(tab[tab.length - 1]);

        // ajout dans le tableau 
        tab.push("Penda");
        tab.unshift("Fall");

        // supprimer le dernier element 
        tab.pop();
        // supprimer le premier element 
        tab.shift();

        tab.forEach((val, cle)=>{
            document.write(`${cle} => ${val}<br>`);
        })

    </script>
</body>
</html>