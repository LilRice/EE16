<?php
include_once("../../admin/konfig_db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="sv">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista address</title>
<link rel="stylesheet" href="style.css">
</head>

<body>



<div class="kontainer">
<?php
$conn = new mysqli($hostname, $user, $password, $database); 

//Fingerade anslutningen//
if ($conn->connect_error){   
    die("Oopsie daisy someone did the poopsie: " . $conn->connect_error);
}else {    
    echo "<p>Det lyckades!</p>"; 
}
$sql = "SELECT * FROM personer"; 
$result = $conn->query($sql); 


if (!$result) {
    die("DET BLEV FEEL!");
}else{
    echo "<p>Personen är registrerat</p>";
}
echo "<table>";
echo "<tr><th>Förnamn</th>";
echo "<th>Efternamn</th>";
echo "<th>E-post</th></tr>";
while ($rad = $result->fetch_assoc()) {
    echo "<tr>"; 
    echo "<td>{$rad['fnamn']}</td>";
    echo "<td>{$rad['enamn']}</td>";
    echo "<td>{$rad['epost']}</td>";

//Skapa knapp för att radera raden// 

echo "<td><a href=\"radera_db_verifera.php?id={$rad['id']}\">Radera</a></td>"; 
echo "<td><a href=\"redigera_db.php?id={$rad['id']}\">Redigera</a></td>";
    echo "</tr>";
    
}
echo "</table>";

$conn->close();
?>
<h3>Registrera address</h3> 
    <nav>
    <a href="logga_in_db.php">Logga In</a>
    <a href="registrera_db.php">Register</a>
    <a href="lista_db.php">Lista</a>
    </nav>
 </div>
 
</body>

</html>