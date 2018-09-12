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
$namn = $_POST["namn"]; 
$password = $_POST["password"]; 


/* Kontrollera */ 

if( $namn == 'Bat' && $password == '1234' ) {
echo "<p>$namn, du är inloggad! Njut av alla singel kvinnor nära ditt område! :)</p>";
}else {
    header('Location: upg_3.php'); 
    die();
}


/*Hoppa tillbaka  till inloggningsroute */ 





?>

</body>
</html>