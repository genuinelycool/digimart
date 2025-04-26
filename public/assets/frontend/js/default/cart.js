"use strict"

// Notyf init
var notyf = new Notyf();

$(function() {
    $('.add-cart').on('click', function(e){
        e.preventDefault();

        const id = $(this).data('id');

        $.ajax({
            method: 'POST',
            url: route('cart.store', id),
            data: {
                _token: csrfToken
            },
            beforeSend: function() {

            },
            success: function(data) {

            },
            error: function(xhr, status, error) {
                let errorMessage = xhr.responseJSON.message;
                notyf.error(errorMessage);
            }
        })
    })
})
