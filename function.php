<?php

$password = "";

if(isset($_GET["password"])) {


$maiuscole = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$minuscole = "abcdefghijklmnopqrstuvwxyz";
$numeri = 1234567890;
$simboli = "!?£$%&/()=";




$caratteri = $maiuscole . $minuscole . $numeri . $simboli;

for ($i=0; $i < $_GET['password']; $i++) { 
    $posizioni_caratteri = rand(0, strlen($caratteri) -1);

     $caratteri_casuali =  substr($caratteri, $posizioni_caratteri, 1);

     $password .= $caratteri_casuali;
}

};


?>

