<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>ORDER</h1> 

    <?php
   if (isset($_POST['email'])){ 

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); 

    $to = "$email";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: bat.ganbat00@gmail.com" . "\r\n" .
    "CC: andre25eng@gmail.com";
    
    mail($to,$subject,$txt,$headers);

   }
    ?>

    <form action="#">
    <label for="">E-Mail</label> <input type="text" name="email">
    <button>Send Order</button>
    </form>
</body>
</html>