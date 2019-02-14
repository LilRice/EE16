window.onload = start; 

function start() {
    const canvas = document.querySelector("#myCanvas");  
    var ctx = canvas.getContext("2d"); 

    //Rita // 

     
    ctx.beginPath();
    ctx.rect(100, 100, 300, 200); 
    ctx.fillStyle = "yellow"; 
    ctx.fill();  
    ctx.closePath();

    ctx.beginPath();
    ctx.rect(200, 100, 30, 500); 
    ctx.fillStyle = "#000"; 
    ctx.fill(); 
    ctx.closePath(); 

    ctx.beginPath();
    ctx.rect(100, 175, 500, 30); 
    ctx.fillStyle = "#000"; 
    ctx.fill(); 
    ctx.closePath(); 

    

    function loop() {
        console.log("Hej"); 


        ctx.beginPath();
    ctx.arc(600, 200, 50, 0, Math.PI*2, false); 
    ctx.fillStyle = "yellow"; 
    ctx.fill(); 
        ctx.closePath(); 
        
    }

    setInterval(loop, 1000);

}

