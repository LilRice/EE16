window.onload = start; 
function start() {
    /* Lyssna på klick på hela sidan*/
    const elementKontainer = document.querySelector('.kontainer'); 
    elementKontainer.addEventListener('click', klick); 
/*Vad händer när vi klickar */
    function klick(e) {
        console.log('Nu har vi en klick event på' + e.target.nodeName);
        /*Vad man klickar på */
        if (e.target.nodeName === 'TD') {
            rakna(e.target);
        }
    }
    /**Nu räknar man */
    function rakna(cell) {
        console.log('Klick i en cell'); 
        const foralder = cell.parentNode.parentNode.parentNode.parentNode;  
        const elementAntal = foralder.querySelector('#antal');  
        const elementSumma = foralder.querySelector('#summa'); 
        
        const elementPris = foralder.querySelector('#pris');  

        const elementKorgen = document.querySelector('#korgen');
        
        var antal = parseInt(elementAntal.textContent); 
        var pris = parseInt(elementPris.textContent); 
        var summa = parseInt(elementSumma.textContent); 
        var korgen = parseInt(elementKorgen.textContent); 


        if (cell.id==='plus') {
            antal++; 
            var summa = pris * antal;

            elementAntal.textContent = antal; 
            elementSumma.textContent = summa;
        } 

        if (cell.id==='minus') {
            if(antal > 1) {
                antal--;
            } 
            var summa = pris * antal;

            elementAntal.textContent = antal; 
            elementSumma.textContent = summa;
        } 
            /* KLickade man i cellen #kop? */
        if (cell.id === 'kop') { 
            korgen = korgen + summa; 

            elementKorgen.textContent = korgen;
            
            
        }
    }
}