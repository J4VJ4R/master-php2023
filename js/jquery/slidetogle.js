'use strict'

$(document).ready(function () {
    $('#jsshowP').click(function () { 
        $('.parrafo').slideToggle(1000, 'swing', ()=>{
            console.log('here the power')
        });        
    });
});