<?php 

$tab = [45, 81, 9, 16, 1, 12];
$carres = [];

foreach ($tab as $val) {
    if ($val == ((int)sqrt($val)*(int)sqrt($val))) {
        $carres[] = $val;
    }
}



foreach ($carres as $key => $value) {
    echo "$value  ";
}