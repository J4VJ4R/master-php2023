'use strict'

var but = document.querySelector('#button')
var text = document.querySelector('#text')

but.addEventListener('click', () =>{
    text.innerHTML = 'Text with js 1613'
})

// button  with function

function showText(){
    text.innerHTML = 'Text with a function'
}