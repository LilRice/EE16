<?php
/*
Ladda upp varor i en katalog 
* PHP version 7
* @category   Webbshop
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
</head>
<body>
<div class="kontainer">

<main>
<?php 
/* Öppna textfilen och läsa innehållet och skriv ut det. */ 

$allaRader = file("beskrivning.txt" );  
/**LOOPA GENOM RAD FÖR RAD */
foreach ($allaRader as $rad) {
    
    echo $rad . "<br>"; 
    /*Plocka isär raden i dess bestånddelar */ 
$delar = explode('¢', $rad);
$varbes = $delar[0]; 
$pris = $delar[1]; 
$bild = $delar[2];
    /*Skriv info och HTML */

    echo "<div class=\"ros\">\n"; 
            echo "<img src=\"./varor/$bild\" alt=\"$varbes\">\n";
            echo "<p>$varbes</p>\n"; 
            echo "<p>$pris</p>"; 
            echo "<hr>\n";
            echo "</div>\n";
} 


?>
</main>
<footer>
WhipnDab
</footer>
</div>


</body>
</html>



