"use strict"

$(function() {
    $('.add-cart').on('click', function(e){
        e.preventDefault();

        const id = $(this).data('id');

        $.ajax({
            method: 'POST',
            url: '/add-cart/' + id,
            data: {
                __token: csrfToken
            },
            beforeSend: function() {

            },
            success: function(data) {

            },
            error: function(xhr, status, error) {

            }
        })
    })
})
