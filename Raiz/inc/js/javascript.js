var luz = document.getElementById("checkbox").value;

function alternarFundo() {
// var luz = document.getElementById("checkbox").value;
 console.log(luz);
if(luz == 'on'){
        document.body.style.background = '#f6f6f6'; 
        luz = 'off';
        console.log(luz);
}else{
        document.body.style.background = '#000';  
        luz = 'on'; 
        console.log("apagado") 
}
}
