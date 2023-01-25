'use strict'

var div1 = document.getElementById('js_div1')
var title = document.getElementsByClassName('titles')
div1.innerHTML = 'Text with js'
div1.style.color = 'red'
div1.style.fontSize = '30px'
div1.style.fontWeight = '900'

title[1].innerHTML = 'Text 2 with js'
title[2].style.fontSize = '40px'

