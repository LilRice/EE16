<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
/* Ta emot data */ 

$url = $_POST["url"]; 
$sordet = $_POST["ordet"];  

/* Läs in webbsidan */
$innehall = file_get_contents($url);
$antal = 0;
$pos = 1;
/* Dela upp texten i en array  */ 



while ($pos != false) {
    /* Hitta första ordet  */
$pos = stripos($innehall, $sordet, $pos + 1);
echo "<p>$pos</p>";
$antal++;
}
/* Skriv ut Resultat */ 


echo "<p>Vi har hittat ordet $sordet på $antal gånger i webbsidan.</p>"
?>
</body>
</html>