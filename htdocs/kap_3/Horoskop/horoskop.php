<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAGENS HOROSKOP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $url = "https://astro.elle.se/" ;

    /*Ladda ned webbsidan */
    $download = file_get_contents($url);

    /*Leta rätt på början av horoskopet */ 
$start = stripos($download, "Väduren");

    /*Leta rätt på slutet av horoskopet */ 
$slut = stripos($download, "post-pagelink");
    
    /*Plocka ut horoskop-koden */ 
    $length = $slut - $start;
$horoskop = substr($download, $start , $length );

    /*Skriv ut på skärmen */
    echo $horoskop;
    
    ?>


</body>
</html>