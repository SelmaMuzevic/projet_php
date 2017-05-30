<?php
// version facile
$etages = 5;

// On calcule la taille des etages qui vaut le nombre d'etages
// multiplie par 2 moins 1
$tailleEtage = $etages*2 - 1;
// On fais une boucle en se basant sur notre nombre d'etages
for($x=1; $x <= $etages; $x++){

/* On calcul le nombre d'espaces avant les etoiles (il s'avere  que c'est le nombre d'etages moins l'etage auquel on se
trouve actuellement)
*/
$nbEspaces = $etages - $x;
/* 
On calcul le nombre d'etoiles qui se trouve etre le reste une fois qu'on a soustrait le nombre 
d'espace fois 2 a la taille des etages */
$nbEtoiles = $tailleEtage - $nbEspaces*2;
// on affiche les espaces et les etoiles avec un echo et un str_repeat
echo str_repeat("_", $nbEspaces);
echo str_repeat("*", $nbEtoiles);
//on saute une ligne
echo "</br>";
}


$pyramide = [];
//version tableau multidimensionnel ( compliqué)
for ($x = 1; $x <= $etages; $x++){
$ligne = [];
$nbEspaces = $etages - $x;
$nbEtoiles = $tailleEtage - $nbEspaces*2;

for ($y = 1; $y <= $tailleEtage; $y++){
    if($y <= $nbEspaces){
        array_push($ligne, "_");
    } elseif( $y <= $nbEspaces+$nbEtoiles){
        array_push($ligne, "*");
    }
}
$pyramide[$x-1] = $ligne;
}
/*
Le foreach en php nous permet d'itérer sur des array, 
il prend en premier argument l'array sur lequel itérer 
suivi du mot clef as puis du nom de la variable qui sera
disponible au sein de la boucle.
Si on veut également avoir accès à la clef/index, on utilisera
la notation ($tableau as $clef=>valeur) au lieu de
($tableau as $valeur)
 */
 
foreach($pyramide as $ligne){
    foreach($ligne as $caractere){
        echo $caractere;
    }
    echo "</br>";
}
?>