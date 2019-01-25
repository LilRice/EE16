<?php
/*
Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. 
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of five lowest temperatures : 60, 62, 63, 63, 64, 
List of five highest temperatures : 76, 78, 79, 81, 85,

*/
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
    <?php
    
    
    $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73] ;  
    $sum = array_sum($temp);  
    $avarage = $sum / count($temp);
    echo $avarage; 

    sort($temp); 
    for ($i=0; $i < 5; $i++) { 
        echo $temp[$i] . " ";
    } 

    rsort($temp); 
    for ($i=0; $i < 5; $i++) { 
        echo $temp[$i] . " ";
    }
    

    ?>
</body>
</html>