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
if (isset($_GET['fel'])) {
    $fel = $_GET['fel'];
    if($fel == 1){
        echo "<p> Fel användarnamn eller lösenord. Försök igen!</p>";
    
    }
}
 
?>
    <p> Var vänlig logga in!</p>
    <form action="upg_3b.php" method="post">
    <label>Namn</label> <input type="text" name="namn"> <br>
    <label>Lösenord</label> <input type="password" name="password"><br>
    
    
    <button>Login</button> 


    
    
    
    
    
    
    </form>
</body>
</html>