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
$replace = $_POST["replace"]; 

/* Läs in webbsidan */
$gamlasida = file_get_contents($url);
$nysida = "";
$antal = -1;
$start = 0; 
$slut = 1;
/* Dela upp texten i en array  */ 



while ($pos != false) {
    /* Hitta första ordet  */
$slut = stripos($gamlasida, $sordet, $start + 1);
/*Plocka ut text delen framför hittade ordet */
$nysida .= substr($gamlasida, $start , $slut ) . $replace;
$antal++;
$start = $slut + strlen($sordet);
}
/* Byta ord */  

file_put_contents("test.html", $nysida);



echo "<p>Vi har hittat ordet $sordet på $antal gånger i webbsidan.</p>";
?>
</body>
</html>