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
        $allarader = file('register.txt');
        echo "<table>";
        echo "<tr><th>Förnamn</th>";
        echo "<th>Efternamn</th>";
        echo "<th>E-post</th></tr>";
        foreach ($allarader as $rad) {
            echo "<tr>";
            $delar = explode(" ", $rad); 
            echo "<td>$delar[0]</td>";
            echo "<td>$delar[1]</td>";
            echo "<td>$delar[2]</td>";
            echo "</tr>";
            }
       echo "</table>";
        
    ?>

    </div>
</body>

</html>