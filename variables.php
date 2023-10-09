<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables en php</title>
</head>
<body>
    <?php 
        // variables 
        $prenom = "Abdou";
        $chaine = "54";

        // pour convertir le type d'une variable 
        settype($chaine, "integer");

        // constante 
        define("PI", 3.14);
        // echo "Prénom:".$prenom;

        // echo "Prénom: $prenom";
        echo 'Prénom:'. $prenom." et PI = ".PI;
        // pour avoir le type d'une variable 
        echo gettype($chaine);

    ?>

    <script>
        // variables 
        let prenom = "Modou";
        let chaine = "32";

        // pour convertir une variable en number (entier)
        let entier = parseInt(chaine);
        // constantes 
        const PI = 3.14;
        // document.write("Prénom :"+prenom)
        document.write(`Prénom :${prenom} et Pi = ${PI}`)
        // pour avoir le type d'une variable 
        document.write(typeof entier)
    </script>
</body>
</html>