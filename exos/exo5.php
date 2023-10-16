<?php 


$tab = ["president", "aliou", "present", "presentation", "directeur"];
$chaine = [];

foreach ($tab as $val) {
    if (strpos($val, "ent")) {
        $chaine[] = $val;
    }
}

foreach ($chaine as $key => $value) {
   echo "$value -";
}