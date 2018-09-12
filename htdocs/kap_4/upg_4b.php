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
$temp = $_POST["temp"];  
$omvandla = $_POST["omvandla"]; 

if ($omvandla == 'f2c') {
    $celcius = ("temp" - 32) * 5 / 9 ; 

    echo "<p>Tempraturen är $celcius i Celcius </p>";

} else {
    $farenheit = 9 / 5 * $temp + 32; 
    
    echo"<p>Tempraturen är $farenheit i Fahrenheit</p>";
}


?>
    
</body>
</html>