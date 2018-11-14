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
if (isset($_POST['adressat']) && isset($_POST['rubrik']) && isset($_POST['meddelande'])) {
    $adressat = $_POST['adressat']; 
    $rubrik = $_POST['rubrik']; 
    $meddelande = $_POST['meddelande']; 

    /****** */ 

    mail($adressat, $rubrik, $meddelande ); 
    echo "<p>Mail skickat till $adressat</p>";
}
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