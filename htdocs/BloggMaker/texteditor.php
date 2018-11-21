<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="texteditor.css">
</head>
<body>
    <header>
    
    </header> 

    <main>
<?php

$inlagg = "";
if (isset($_POST["inlagg"])) {  
    $inlagg = filter_input(INPUT_POST, "inlagg", FILTER_SANITIZE_STRING); 
 
$handtag = fopen("inlagg.txt" , 'w');  
fwrite($handtag, $inlagg); 
fclose($handtag);   

echo "<script defer src=\"modal.js\"></script>";

}else {
    /* hämta texten från filen */ 
    $inlagg = file_get_contents('./inlagg.txt');
    }


?>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

    <form action="#" method="post">
    <label for="inlagg">Inlägg</label>
    <textarea class="form-control" name="inlagg" id="inlagg" cols="30" rows="10"> 
    <?php
    echo "$inlagg"
    ?>
    </textarea>  
    <button id="myBtn">Spara</button>
    </form>   
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    

 </main>

    <footer>LillaRisen 2018</footer>
</body>
</html>