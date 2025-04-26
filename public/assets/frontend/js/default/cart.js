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
                $(`#cart-btn-${id}`).text('Adding...');
            },
            success: function(data) {
                console.log(data);
                if (data.status == 'success') {
                    notyf.success(data.message);

                    $(`#cart-btn-${id}`).text('Add to cart');
                }
            },
            error: function(xhr, status, error) {
                let errorMessage = xhr.responseJSON.message;
                $(`#cart-btn-${id}`).text('Add to cart');
                
                notyf.error(errorMessage);
            }
        })
    })
})
