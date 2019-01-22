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
    
    //Hämta användarens lösenord från DB// 

    //Kontrollerar lösen om det är stämmer//
    if(password_verify($password, $hashFil)) {
        $_SESSION['username'] = "TinderRiddaren"; 
        header('Location: lista_db.php'); 
        exit; 
        
    }
}
?>
<form action="#" method="post">
<label for=""></label>Username<input type="text" name="username"><br>
<label for=""></label>Password<input type="password" name="password"><br>
<button>Log in</button>
</form>
</div>
</body>
</html>