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

</head>

<body>
    <div class="kontainer">
        <header>
            <h1>Alla Varor</h1>
            <div>
                <span id="antalVaror">0</span>
                <span id="korgen">0</span>kr
                
        </header>

        <main>
            <?php 
/* Öppna textfilen och läsa innehållet och skriv ut det. */ 

$allaRader = file("beskrivning.txt" );  
/**LOOPA GENOM RAD FÖR RAD */
foreach ($allaRader as $rad) {
    
    
    /*Plocka isär raden i dess bestånddelar */ 
    $delar = explode('¢', $rad);
    $varbes = $delar[0]; 
    $pris = $delar[1]; 
    $bild = $delar[2];
    /*Skriv info och HTML */
    
    echo "<div class=\"vara\">\n"; 
    echo "<img src=\"./varor/$bild\" alt=\"$varbes\">\n";
    echo "<p>$varbes</p>\n"; 
    echo "<p>$pris</p>\n"; 
    echo "<p>Styckpris: <span id=\"pris\">$pris</span> kr</p>\n" ; 
    echo "<p>Summa: <span id=\"summa\">$pris</span> kr</p>\n";
    
    echo "<table>\n";
    echo "<tr>\n";
    echo "<td id=\"antal\"rowspan=\"2\">1</td>\n";
    echo "<td id=\"plus\">+</td>\n";
    echo "<td id=\"kop\" rowspan=\"2\">KÖP</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    
    echo "<td id=\"minus\">-</td>\n";
    echo "</tr>\n";
    echo "</table>\n";
    echo "</div>\n";          
}  
?>
        </main>
        <footer>
            WhipnDab
        </footer>
    </div>
    <script src="script.js"></script> 
    


</body>

</html>