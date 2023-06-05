<?php

//déclaration variable sur php

$nom = 'Jean';
$prenom = 'Marc';
echo $nom ," ", $prenom;

$firstname = 'Rakoto';
$lastname = 'Fifaliana';

$fullname = $firstname. ' '.$lastname;
var_dump($fullname);

$entier = 5;
$entier += 5;
var_dump($entier);

$nombre = 7;
$second = 13;
$somme = $nombre + $second;
var_dump($somme);

//calcul
function division($a, $b){
    return $a / $b;
}
echo division(45, 9);

echo "<br>";
function multiplication($a, $b){
    return $a * $b;
}
echo multiplication(4, 9);

//tableau
echo "<br>";
$liste = ['Pierre', 'Paul', 'Jacques'];
var_dump($liste);

$produit = [
    'nom' => "chaise",
    'disponible' => true,
    'quantite' => 5,
    'prix' => 4200,
    'couleurs' => ['marron', 'Blanche', 'Noir']
];
var_dump($produit);


