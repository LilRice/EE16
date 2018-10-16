/* När websidan laddats klart kör start() */
window.onload = start; 
function start() { 

    /* Anslut till elementen vi behöver jobba med */
    const elementTable = document.querySelector('table'); 
    console.log('Jag har hittat elementet:', elementTable); 
    
    const elementPlus = document.querySelector('#plus'); 
    console.log(elementPlus);  

    const elementMinus = document.querySelector('#minus'); 
    console.log(elementMinus);  

    const elementKop = document.querySelector('#kop'); 
    console.log(elementKop);  
    
    const elementAntal = document.querySelector('#antal'); 
    console.log(elementAntal); 

    const elementSumma = document.querySelector('#summa'); 
    console.log(elementSumma); 

    const elementPris = document.querySelector('#pris'); 
    console.log(elementPris);
    
    elementPlus.addEventListener('click', plus);
    elementMinus.addEventListener('click',minus);
    elementKop.addEventListener('click',kop);
    /* Räkna upp antal vara */
    function plus() {
        /* Läs av antal  och summan*/
        
        var antal = elementAntal.textContent; 
        var pris = elementPris.textContent;
        /*Räkna upp */
        antal++;
        /* Räkna upp summa */
        summa = pris * antal; 
        /* Skriv tillbaka */
        elementAntal.textContent = antal; 
        elementSumma.textContent = summa;
        

    }

/* Räkna ner antal vara */
    function minus() {
            /* Läs av antal */
            
            var antal = elementAntal.textContent;
            /*Räkna ned om större än 1 */
        
        if (antal > 1) {
            antal--; 
        }
            /* Skriv tillbaka */
            elementAntal.textContent = antal;
    }


    function kop() {
        /* Läs av korgen */
        
        /* Addera antal summa */
        
        /* Skriv tillbaka */
    }


}
