<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $chaine = "Ma chaine de caracteres";
        $new = "bassirou";
        $token = "34567";
        $p1= "abdou";
        $p2= "abdou";
        // strstr()

        // str_starts_with()

        // strlen permet de renvoyer le nombre de caracteres 
        echo strlen($chaine);
        // parcours sequentiel d'une chaine 
        echo $chaine[0];
        echo $chaine[strlen($chaine) - 1];
        // str_word_count permet de renvoyer le nombre de mots d'une chaine 
        echo str_word_count($chaine);

        echo strtoupper($chaine);
        echo strtolower($chaine);
        echo strrev($chaine);
        echo strcmp($p1, $p2);

        if (ctype_digit($token)) {
            echo "Uniquement des chiffres";
        }else{
            echo "Caracteres speciaux";
        }

        echo ucwords($chaine);
        echo ucfirst($p1);

    ?>


    <script>
        let chaine = "Ma chaine de caractères";
        let newc = "bassirou"

        console.log(chaine[0]);
        console.log(chaine[chaine.length - 1]);
        console.log(chaine.toUpperCase());

    </script>
</body>
</html>

