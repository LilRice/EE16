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

<?php

if(isset($_POST['fornamn']) && 
isset($_POST['efternamn']) && 
isset($_POST['epost'])){

    $fornamn = filter_input(INPUT_POST, 'fornamn', FILTER_SANITIZE_STRING); 
$efternamn = filter_input(INPUT_POST, 'efternamn',FILTER_SANITIZE_STRING); 
$epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_STRING);

//Logga in på data basen//
$conn = new mysqli($hostname, $user, $password, $database); 

//Fingerade anslutningen//
if ($conn->connect_error){   
    die("Oopsie daisy someone did the poopsie: " . $conn->connect_error);
}else {    
    echo "<p>Det lyckades!</p>"; 
    }


//Lagra data i tabellen//
//Skapa SQL frågan vi ska köra//
$sql = "INSERT INTO personer (fnamn, enamn, epost) VALUES ('$fornamn', '$efternamn', '$epost');"; 
echo "<p>$sql</p>";

$result = $conn->query($sql); 


if (!$result) {
    die("DET BLEV FEEL!");
}else{
    echo "<p>Personen är registrerat</p>";
}

//Stänger ner anslutningen//
$conn->close();
}




?>


<div class="kontainer">  
<h3>Registrera address</h3> 
    <nav>
    <a href="logga_in_db.php">Logga In</a>
    <a href="registrera_db.php">Register</a>
    <a href="lista_db.php">Lista</a>
    </nav>

    <form action="#" method="post">
    <label for="">Förnamn</label> <input type="text" name="fornamn"> 
    <label for="">Efternamn</label> <input type="text" name="efternamn"> 
    <label for="">E-Post</label> <input type="text" name="epost"> 
    <button>Spara</button>
    
    </form>
    </div>
</body>
</html>