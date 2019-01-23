<?php
/*
* PHP version 7
* @category   Lånekalkylator
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
?>
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
$text = "Bat erdene Ganbat"; 
$uppercase = strtoupper($text) ; 
echo "<p>$uppercase</p>"; 
$lowercase = strtolower($text); 
echo "<p>$lowercase</p>";
$firstchar = ucfirst($text);
echo "<p>$firstchar</p>"; 
$firstword = ucwords($text);
echo "<p>$firstword</p>";
?>  


    
</body>
</html>