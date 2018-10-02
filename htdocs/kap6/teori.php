<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stränghantering</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
$adress = "  Craafords väg 12  ";
$trimadress = trim($adress); 
echo ".$adress.$trimadress." ;

$namn = "Bat";  
$stortNamn = strtoupper($namn); 
echo "<p>$namn $stortNamn</p>"; 

echo "<p>Längd ="  . strlen($namn) . "</p>"; 

$hello = "Hej på dig!"; 
echo "<p>" . substr($hello, 0, 3) . "</p>";
echo "<p>" . substr($hello, 4, 2) . "</p>";
echo "<p>" . substr($hello, 7, 4) . "</p>"; 
echo "<p>" . substr($hello, 0, 3) . "</p>";

$epost = "hel@google.se" ;
 
if(strstr($epost, "g")) {
    echo "<p>Innehåller a</p>"; 

    while ($pos != false) {
        /* Hitta första ordet  */
    $slut = stripos($gamlasida, $sordet, $start + 1);
    /*Plocka ut text delen framför hittade ordet */
    $nysida .= substr($gamlasida, $start , $slut ) . $replace;
    $antal++;
    $start = $slut + strlen($sordet);
    }
}


    ?>
</body>
</html>