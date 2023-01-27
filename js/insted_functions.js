'use string';

var n1 = prompt('ingresa tu nombre'); 
var n2 = prompt('ingresa tu apellido'); 


function InConsole(n1, n2){
    console.log(n1 + ' ' + n2);
}

function InDocument(n1, n2){
    document.write(n1 + ' ' + n2);
}

function ShowData(n1, n2, n3 = false){
    if(n3 == false){
        InConsole(n1, n2);
    }else{
        InDocument(n1, n2);
    }
}

ShowData(n1, n2, true);