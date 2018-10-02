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
$sordet = $_POST["sordet"]; 
$nordet = $_POST["nordet"]; 

/* Läs in webbsidan */
$gamlasida = file_get_contents($url);

$nysida = str_nordet($sordet, $nordet, $gamlasida);
/* Byta ord */  

file_put_contents("test.html", $nysida);




?>
</body>
</html>