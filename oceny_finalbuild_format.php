<?php
//Tablica    
$oceny = array(
    "0" => array(
        'ocena' => 4,
        'waga' => 2
    ),
    "1" => array(
        'ocena' => 2,
        'waga' => 1
    ),
    "2" => array(
        'ocena' => 6,
        'waga' => 3
    ),
    "3" => array(
        'ocena' => 1,
        'waga' => 6
    ),
    "4" => array(
        'ocena' => 4.5,
        'waga' => 2
    ),
    "5" => array(
        'ocena' => 3.5,
        'waga' => 3
    )
);


//moje Zmienne
$x           = 0;
$licznikocen = 0;
$licznikwag  = 0;

//Moj kod    
foreach ($oceny as $ocena) {
    $x           = $ocena['ocena'] * $ocena['waga'];
    $licznikocen = $licznikocen + $x;
    $licznikwag  = $licznikwag + $ocena['waga'];
    
}
$unrn        = $licznikocen / $licznikwag;
$rn          = round($unrn, 2);
$oc          = substr($rn, 0, 1);
$poprzecinku = substr($rn, 2, 3);
if ($poprzecinku >= 61) {
    $oc = $oc + 1;
}
print $oc;

