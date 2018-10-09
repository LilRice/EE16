<?php
/*
*Gör ett formulär där användaren ska fylla i namn, adress, postnr och postort.

Kontrollera att alla fälten är ifyllda, och innehåller minst 3 tecken.
Kontrollera att postnumret innehåller 5 tecken och att de tecknen endast är siffror.

* PHP version 7
* @category   Check formular
* @author     Bat <Bat.webb@gmail.com>
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>check</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.0/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php 
    $postnmr = str_replace(' ', '');
if (isset($_POST["namn"]) && (isset($_POST["adress"]) && (isset($_POST["postnmr"]) && (isset($_POST["postort"]))))){
    $namn = $_POST["namn"];
    $adress = $_POST["adress"];
    $postnmr = $_POST["postnmr"];
    $postort = $_POST["postort"];
    $email = $_POST["email"]; 
    $fel = 0;
    if(strlen($namn)== 0) {
        echo "<p>Varning tom ruta: Vg fyll i namnet.</p>";
        $fel++;
    } 
    if(strlen($adress)== 0) {
        echo "<p>Varning tom ruta: Vg fyll i adresset.</p>";
        $fel++;
    }
    if(strlen($postnmr) < 5) {
        echo "<p>Var vänlig och ange gilltigt postnummer!</p>";
        $fel++;
    }
    if(strlen($postort)== 0) {
        echo "<p>Varning tom ruta: Vg fyll i postortet.</p>";
        $fel++;
    }
    
    if(strlen($namn)< 3) {
        echo "<p>Varning minst tre tecken lång</p>";
        $fel++;
    } 
    if(strlen($adress) <3) {
        echo "<p>Varning måste vara minst 3 tecken lång </p>";
        $fel++;
    } 
    if(strlen($postort) <3) {
        echo "<p>Varning måste vara minst 3 tecken lång </p>";
        $fel++;
    }  
    if(strlen($email)< 6) {
        echo "<p>Varning minst sex tecken lång</p>";
        $fel++;
    }  

    if(!strpos($email, '@') ) {
        echo "<p>Varning minst giltigt email adress </p>";
        $fel++;
    } 
    if($fel == 0) {
?>
    <form action="#" method="post">
        <label for="">Namn</label> <input type="text" name="namn"><br>
        <label for="">Address</label> <input type="text" name="adress"> <br>
        <label for="">Postnummer</label> <input type="number" name="postnmr"><br>
        <label for="">Postort</label> <input type="text" name="postort"><br>
        <label for="">E-mail</label> <input type="text" name="email"><br>

        <button>Skicka in</button>
    </form>

    <?php
    }else {
 ?>
    <form action="#" method="post">
        <label for="">Namn</label> <input type="text" name="namn" value="<?php echo $namn?><br>
        <label for="">Address</label> <input type="text" name="adress"> <br>
        <label for="">Postnummer</label> <input type="text" name="postnmr"><br>
        <label for="">Postort</label> <input type="text" name="postort"><br>
        <label for="">E-mail</label> <input type="text" name="email"><br>

        <button>Skicka in</button>
    </form>

    <?php
    }
}

?>



</body>

</html>