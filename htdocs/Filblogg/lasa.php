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
/* Öppna textfilen och läsa innehållet och skriv ut det. */ 

$allaRader = file("inlaggen.txt" );  
echo "<p>";
foreach ($allaRader as $rad) {
    
    echo $rad; 
    echo "<br>";
} 

echo "</p>"
?>
</body>
</html>

