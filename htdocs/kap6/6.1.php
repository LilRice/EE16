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
if (isset($_POST["namn"]) && (isset($_POST["adress"]) && (isset($_POST["postnmr"]) && (isset($_POST["postort"]))))){
    $namn = $_POST["namn"];
    $adress = $_POST["adress"];
    $postnmr = $_POST["postnmr"];
    $postort = $_POST["postort"]; 

    if(strlen($namn)== 0) {
        echo "<p>Varning tom ruta: Vg fyll i namnet.</p>";
    } 
    if(strlen($adress)== 0) {
        echo "<p>Varning tom ruta: Vg fyll i adresset.</p>";
    }
    if(strlen($postnmr)== 0) {
        echo "<p>Varning tom ruta: Vg fyll i postnmret.</p>";
    }
    if(strlen($postort)== 0) {
        echo "<p>Varning tom ruta: Vg fyll i postortet.</p>";
    }

}

?>

<form action="#" method="post">
<label for="" >Namn</label> <input type="text" name="namn"><br>
<label for="" >Address</label> <input type="text" name="adress"> <br>
<label for="" >Postnummer</label> <input type="text" name="postnmr"><br>
<label for="" >Postort</label> <input type="text" name="postort"><br>

<button>Skicka in</button>
</form>
   
</body>
</html>