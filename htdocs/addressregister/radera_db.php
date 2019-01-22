<?php
include_once("../../admin/konfig_db.php");
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
    $conn = new mysqli($hostname, $user, $password, $database); 

    //Fingerade anslutningen//
    if ($conn->connect_error){   
        die("Oopsie daisy someone did the poopsie: " . $conn->connect_error);
    }else {    
        echo "<p>Det lyckades!</p>"; 
    }

    if (isset($_GET["id"])) {

        $id = $_GET["id"]; 
        echo "<p>$id</p>";

        //SQL satsen för att radera en rad// 
        $sql = "DELETE FROM personer WHERE id =$id";
        $result = $conn->query($sql); 


if (!$result) {
    die("DET BLEV FEEL!");
}else{
    echo "<p>Personen är borta från databasen</p>";
}

    } else {
       echo "<p>Något blev galet:(((( ID saknas</p>";
    }
    
    
    
    ?>
</body>
</html>