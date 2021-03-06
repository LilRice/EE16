<?php 
/* Kolla att man har klickat på knappen submit */
if(isset($_POST['submit'])) {
    $filen = $_FILES['filen']; 

    $fileName = $filen['name']; 
    
    echo "<p>Filens namn är $fileName</p>";  

    $fileType = $filen['type']; 
    
    echo "<p>Filens namn är $fileType</p>";  

    $fileTempName = $filen['tmp_name']; 
    
    echo "<p>Filens namn är $fileTempName</p>";  

    $fileSize = $filen['size']; 
    
    echo "<p>Filens storlek i byte är $fileSize</p>"; 

    $fileError = $filen['error']; 
    
    echo "<p>Filens felmeddelande $fileError</p>";  

    $fileExt = explode('image/', $fileType); 
     
    echo "<p> Filens filändelse är $fileExt[1]</p>";
    $allowedType = ['jpeg', 'png', 'pdf', 'gif']; 
/* Felmeddelande */ 
$errors = array(
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);
/* Kollar om filen är tillåtet. */
    if(in_array($fileExt[1], $allowedType)) {
        echo "<p>Tillåtet filtyp</p>";  

        if ($fileError == 0 ) { 
            /* Skapa nuyy nuikt filnamn för att inte skriva över filer som har samma namn */
            $fileNewName = uniqid('', true).".".$fileExt[1]; 

            /*Hela sökvägen till den nya filen */
            $fileDestination = "./Bilder/$fileNewName"; 
            echo "<p>$fileDestination</p>"; 

            /**Flytta Filen Rädd */ 
            move_uploaded_file($fileTempName, $fileDestination); 
            echo "<p>Det är uppladdad</p>"; 

            /* Hoppa tilbaka till hem */
            header("Location:filuppladning.php?uploadsuccess");
        }else { 
            echo "<p> något gick fel: $errors[$fileError]</p>";
        }
    }else {
        echo "<p>Icke tillåten filtyp</p>";
    }
}
?>