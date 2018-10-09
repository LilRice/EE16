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
function datum() {
/*Alla dagar i veckan  */ 
$dagar[1] = "Måndag";
$dagar[2] = "Tisdag";
$dagar[3] = "Onsdag";
$dagar[4] = "Torsdag";
$dagar[5] = "Fredag";
$dagar[6] = "Lördag";
$dagar[7] = "Söndag"; 
/* Dagens nr */
$dagnumber  =  date('N'); 

echo $dagar[$dagnumber]; 

$manad[] = "Jan";
$manad[] = "Feb";
$manad[] = "Mar";
$manad[] = "Apr";
$manad[] = "Maj";
$manad[] = "Juni";
$manad[] = "July";
$manad[] = "Aug";
$manad[] = "Sept";
$manad[] = "Okt";
$manad[] = "Nov";
$manad[] = "Dec"; 

$manadnummer = date('n'); 
$datumnummer = date('d'); 
$ar = date('Y');

return "$dagar[1]";

}
    ?>
</body>
</html>