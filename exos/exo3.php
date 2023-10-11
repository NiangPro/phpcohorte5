<?php 

$tel = "763748494";

if (ctype_digit($tel)) {
    if (strlen($tel) == 9) {
        if (str_starts_with($tel, "70") || strtr($tel, 0, 2) == "75" || str_starts_with($tel, "76") ||str_starts_with($tel, "77") || str_starts_with($tel, "78") || str_starts_with($tel, "33") || str_starts_with($tel, "88")) {
            echo  "Numéro valide :".$tel;
        }else{
            echo " Le numéro de téléphone doit commencer par 70, 75, 76, 77, 78, 33 ou 88";
        }
    }else{
        echo "Le numéro de téléphone doit avoir 9 chiffres";
    }
}else{
    echo "Le numéro de téléphone doit contenir uniquement des chiffres";
}