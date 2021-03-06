<?php
include_once("../../admin/konfig_db.php");
?> 

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adressregister</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
        <h3>Redigera person</h3>
        <nav>
            <a href="logga_in_db.php">Logga in</a>
            <a href="registrera_db.php">Registrera</a>
            <a href="lista_db.php">Lista</a>
        </nav>
<?php
/* Kontrollera att data finns innan vi läser av data */
if (isset($_POST["id"]) && isset($_POST["fnamn"]) && isset($_POST["enamn"]) && isset($_POST["epost"])) {
    /* Läs av data */
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $fnamn = filter_input(INPUT_POST, "fnamn", FILTER_SANITIZE_STRING);
    $enamn = filter_input(INPUT_POST, "enamn", FILTER_SANITIZE_STRING);
    $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);
    /* Logga in på databasen, och skapa en anslutning */
    $conn = new mysqli($hostname, $user, $password, $database);
    /* Fungerade anslutningen? */
    if ($conn->connect_error) {
        die("Kunde inte ansluta till databasen: " . $conn->connect_error);
    } else {
        /* echo "<p>Anslutningen lyckades!</p>"; */
    }
    /* Skapa sql-frågan vi skall köra */
    $sql = "UPDATE personer SET fnamn = '$fnamn', enamn = '$enamn', epost = '$epost' WHERE id = '$id'";
    $result = $conn->query($sql);
    /* Gick det bra? Kunde SQL-satsen köras? */
    if (!$result) {
        die("Det blev fel med SQL-satsen.");
    } else {
        echo "<p>Uppdateringen lyckades!</p>";
    }
}
?>
    </div>
</body>
</html>
