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
/*Kontrollera att POST variaablerna finns,dvs första gången */ 
if (isset($_POST["number1"])) {



$number1 = $_POST["number1"]; 


if ( $number1 < $number2) {
    echo "<p>Quick Math</p>";
    for ($i=1; $i < $number1; $i++) { 
        if($i*$i < 50) {

        
        echo $i . " " . $i*$i;
    }
    }
} else {
header('<p>Det ska var någonting ja</p>'); 

}
}

?>

    <p> Var vänlig logga in!</p>
    <form action="3.3.php" method="post">
    <label>Number1</label> <input type="text" name="number1"> <br>
    
    
    
    <button>Login</button> 
</form>
</body>
</html>