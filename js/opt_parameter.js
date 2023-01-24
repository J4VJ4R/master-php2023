'use strict';

var n1 = 'hola';
var n2 = 'Javi';

function opt(n1, n2, n3 = false){
    if(n3 == false){
        console.log(n1 + ' ' + n2);
    }else{
        document.write(n1 + ' ' + n2);
    }
}

opt(n1, n2, true);