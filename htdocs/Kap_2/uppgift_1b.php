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
            $namn  =  $_POST["namn"];
            $email =  $_POST["email"]; 
            $phone =  $_POST["phone"];
            
            
            echo "Hej $namn tack för att du meddelar, vi kommer att kontakta dig på detta telefon nummer $phone ";
    ?>
</body>
</html>