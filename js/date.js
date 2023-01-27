'use strict'


var text = document.querySelector('#text')

setInterval( () => {
    var date = new Date();
    var hh = date.getHours()
    var min = date.getMinutes()
    var sec = date.getSeconds()

    text.innerHTML = hh + '-' + min + '-' + sec
}, 1000)