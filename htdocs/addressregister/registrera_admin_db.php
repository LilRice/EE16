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
<div class="kontainer">
<h3>Registrera address</h3> 
<nav>
<a href="logga_in_db.php">Logga In</a>
<a href="registrera_db.php">Register</a>
<a href="lista_db.php">Lista</a>
</nav>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password =  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) ;
    /*Hash filen rad för för rad*/  
     
    $conn = new mysqli($hostname, $user, $password, $database);
    /* Fungerade anslutningen? */
    if ($conn->connect_error) {
        die("Kunde inte ansluta till databasen: " . $conn->connect_error);
    } else {
        /* echo "<p>Anslutningen lyckades!</p>"; */
    } 

    $hash = password_hash($losen, PASSWORD_DEFAULT);

    //Hämta användarens lösenord från DB//  

    $sql = "INSERT INTO admin VALUES(anamn, hash) SET ('$anamn', '$hash');"; 
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Det blev fel med SQL-satsen.");
    } else { 
        echo "Lyckade";
     }
    }  

    

    //Kontrollerar lösen om det är stämmer//
    
        
    

?>
<form action="#" method="post">
<label for="">Username</label><input type="text" name="username">
<label for="">Password</label><input type="password" name="password">
<button>Log in</button>
</form>
</div>
</body>
</html>