'use strict';

const csrf = $('meta[name=csrf]').attr('content');

$(function () {
    $('.delete-item').on('click', function (e) {
        e.preventDefault();

        let url = $(this).attr('href');
        console.log(url);

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data:{
                        _token: csrf
                    },
                    success: function (data) {

                    },
                    error: function (xhr, status, error) {

                    }
                });

                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    });
});


