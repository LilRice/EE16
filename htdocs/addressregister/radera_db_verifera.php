<?php
include_once("../../admin/konfig_db.php");

session_start();
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
<div class="container">
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
    
    
    //SQL satsen för att radera en rad// 
    $sql = "SELECT * FROM personer WHERE id =$id";
    $result = $conn->query($sql);  
    if (!$result) {
        die("DET BLEV FEEL!");   
    }else{
        
        $rad = $result->fetch_assoc(); 
        echo "<p>Vill du verkligen radera {$rad['fnamn']} {$rad['enamn']} från databasen <a href=\"radera_db.php?id={$rad['id']}\">Radera</a></p>";     
    }   
} else {
    echo "<p>Något blev galet:(((( ID saknas</p>";
}



?>

    <h3>Registrera address</h3> 
    <nav>
    <a href="logga_in_db.php">Logga In</a>
    <a href="registrera_db.php">Register</a>
    <a href="lista_db.php">Lista</a>
    </nav>
</body>

</html>