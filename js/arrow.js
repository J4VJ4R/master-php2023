'use strict'

var n1 = 2
var n2 = 3 
function suma(n1, n2, fn){
    suma = n1 + n2
    fn(suma)
    return suma
}

suma(2, 3, d =>{
    console.log('la suma es ' + d)
    console.log('The multiplication is ' + d * 3)
})
