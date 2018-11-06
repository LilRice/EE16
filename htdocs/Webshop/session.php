<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    
</head>
<body>
<h1>SESSION</h1>
    <ul> 
    <li><a href="session.php"></a>Home</li> 
    <li><a href="contact.php">Contact</a></li> 
    </ul> 

    <?php
    $_SESSION['username'] = "TinderRiddaren69"; 
    echo $_SESSION['username'];  
    if (!isset($_SESSION['username'])) {
        echo "You are not logged in!";
    }else {
        echo "Were in bois!";
    }
    ?>
</body>
</html>