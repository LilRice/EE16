<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
<header>
<h1>Skicka mail</h1>
</header>
<main>

<?php

$adressat = filter_input(INPUT_POST, 'adressat' , FILTER_SANITIZED_EMAIL); 
$rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZED_STRING); 
$meddelande = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZED_STRING); 

if ($adressat && $rubrik && $meddelande) {

    echo "<p>Mail skickat till $adressat";
   echo "<p>Rubriken är $rubrik";               
    echo "<p>Mail skickat till $adressat</p>";
}else {
    echo "<p>Vg fyll i alla fält!</p>";
}
    
    /****** */ 
?>
    <form action="#" method="post"> 
    <label for="adressat">E-post</label>
    <input type="text" id="adressat" name="adressat"><br>  
    <label for="rubrik">Rubrik</label>
    <input type="text" id="rubrik" name="rubrik"><br> 
    <label for="meddelande">Meddelande</label> 
    <textarea id="meddelande" name="meddelande"></textarea><br> 
    <button type="submit">Skicka mail</button>

    </form>
    </main>
    </div> 
    <footer></footer>
</body> 


</html>