<?php
/*
*Läser innehållet i en mapp och skapar ett bildgalleri.
* PHP version 7
* @category   Bild Gallerti
* @author     Bat Ganbat <bat.ganbat00@gmail.com>
* @license    PHP CC
*/
?>
DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

    <?php 
    $sokvag = './Bilder'; 

    $filer = scandir($sokvag);  

    echo "<div class=\"kontainer\">\n"; 
    echo "<h1>Bildgalleri</h1>\n"; 

    foreach ($filer as $fil) { 
        if ($fil != "." && $fil != ".."){
            echo "<div class=\"ros\">\n"; 
            echo "<img class=\"ram vanster\" src=\"./Bilder/$fil\" alt=\"Bild från unsplash.com\">\n";
            echo "<p>Lorem Ipsum dolor, sit amen bullshit ya!</p>\n"; 
            echo "<hr>\n"; 
            echo "</div>\n";
        
       echo "<p> $fil </p>";
        }
    }
    ?>
</body>
</html>