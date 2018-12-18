window.onload = start; 

function start() {
    const eInput = document.querySelector("input"); 
    const eTextarea = document.querySelector("textarea"); 
    const eButton = document.querySelector("button"); 
    let url = "http://10.151.171.209/ajax/klient.php";

    eButton.addEventListener("click", skicka); 
    function skicka() {
        
        let ajax = new XMLHttpRequest();
        ajax.addEventListener("loadend", sparaData);

        function sparaData() {
            console.log(this.responseText);
            
            if (this.responseText == "Klart") {
                alert("Platserna sparades i filen.")
            } else {
                alert("Något gick fel.");
            }
        }
        ajax.open("POST", url, true);

        /* Läs av formulärets innehåll */
        let formData = new FormData();
        formData.append("namn", eInput.value); 
        formData.append("meddelande", eTextarea.value);

        /* Nu, skicka data */
        ajax.send(formData);
    
    }
}