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
if (isset($_POST["number1"]) && isset($_POST["number2"])) {



$number1 = $_POST["number1"]; 
$number2 = $_POST["number2"]; 

if ( $number1 < $number2) {
    echo "<p>Quick Math</p>";
    for ($i=$number1+1; $i < $number2; $i++) { 
        echo "$i ";
    }

} else {
header('<p>Det ska var någonting ja</p>'); 

}
}

?>

    <p> Var vänlig logga in!</p>
    <form action="3.3.php" method="post">
    <label>Number1</label> <input type="text" name="number1"> <br>
    <label>Number2</label> <input type="text" name="number2"><br>
    
    
    <button>Login</button> 
</form>
</body>
</html>