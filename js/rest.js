'use strict';

function rest(p1, p2, ...p){
    console.log(p1);
    console.log(p2);
    for(var i = 0; i <= p.length; i++){

        console.log(p[i]);
    }
}

rest("Alemania", "Colombia", "Porto Bello", "White City");