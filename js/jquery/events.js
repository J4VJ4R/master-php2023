'use strict'

$(document).ready(()=>{
    $('#jsbuttonShow').click(function () { 
        $('#jstext').show(1000);        
    });
    $('#jsbuttonHidde').click(function () { 
        $('#jstext').hide(1000);
    });
})