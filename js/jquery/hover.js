'use strict'

$(document).ready(function () {
    $('#jsbuttonShow').hover(function () {
            // over
            $('#jstext').show(500);
            $('#jstext').text('you are over me');
        }, function () {
            // out
            $('#jstext').text('you are out me');
            $('#jstext').hide(500);
        }
    );
});