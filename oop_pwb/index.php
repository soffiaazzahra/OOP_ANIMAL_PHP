<?php

// membuat instance dari class animal
require_once('animal.php'); 
require_once('ape.php');
require_once('frog.php');

$shaun = new Animal('Shaun');
echo "Name: " . $shaun->name . "<br>";
echo "Legs: " . $shaun->legs . "<br>";
echo "Cold  Blooded: " . $shaun->cold_blooded . "<br>";
echo "<br>";

//membuat instance dari class frog
$kodok = new frog("buduk");
echo "Name: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "Cold  Blooded: " . $kodok->cold_blooded . "<br>";
echo "Jump: ";
$kodok->jump(); // "hop hop"
echo "<br>";



// membuat instance dari class ape
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>";
echo "Cold  Blooded: " . $sungokong->cold_blooded . "<br>";
echo "Yell: "; // "Auooo"
$sungokong->Yell(); // "Auooo"
echo "<br>";



?>