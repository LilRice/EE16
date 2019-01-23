<?php
include_once("init.php");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<?php

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['surename'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING); 
    $user_password = filter_input(INPUT_POST, 'user_password', FILTER_SANITIZE_STRING); 
    //Logga in på data basen//
$conn = new mysqli($host, $user_name, $user_password, $db_name); 

//Fingerade anslutningen//
if ($conn->connect_error){   
    die("Oopsie daisy someone did the poopsie: " . $conn->connect_error);
}else {    
    echo "<p>Det lyckades!</p>"; 
    }

    $sql = "INSERT INTO users (name, user_name, user_password) VALUES ('$name', '$user_name', '$user_password');"; 
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
<div class="container"> 
    <h1>1WEEK</h1>
<form action="#" method="post">
    <label for="">Username</label> <input type="text" name="username"> 
    <label for="">Password</label> <input type="text" name="password"> 
    <label for="">Name</label> <input type="text" name="surename"> 
    <label for="">E-Mail</label> <input type="text" name="email">
    <button>Register</button>
    
</form>
</div>
</body>
</html>