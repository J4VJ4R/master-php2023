'use strict';

function mensaje1(fn){
    setTimeout( function() {
        console.log('Message 1');
        fn();
    }, 3000);
}

function mensaje2(){
    console.log('Message 2');
}

mensaje1(mensaje2);