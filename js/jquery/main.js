'use strict'

$(document).ready(()=>{
    //selectores de etiquetas
    var span = $('span')
    span.css('border','2px solid red')
    console.log(span.text())
    //selectores de atributos
    var title = $('[title="google"]')
    title.css('font-size', '50px')
    title.css('color', '#ffa500')
    console.log(title.text())
})

