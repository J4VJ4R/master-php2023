'use strict'


$(document).ready(function () {
    $('.parrafo').hover(function () {
            // over
            $(this).addClass('border');
        }, function () {
            // out
            $(this).removeClass('border');
        }
    );
});