var textBlocks = new Array(
    'Select from the list to change this box',
    'Text block two',
    'Text block three'); 

function changeText(form) {
    var ind = form.qwer.selectedIndex;
    document.getElementById("display").innerHTML=window.app.palabras[2]; 
}



function analizar(fuente) {


    document.getElementById('txtSalida').innerHTML = fuente;

    
}
