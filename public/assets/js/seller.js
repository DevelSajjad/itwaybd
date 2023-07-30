$(function () {
    $("#saveBtn").click(function (e) {
        e.preventDefault();
        let sellerData = $('#sellerInfo').serialize();
        $('.error').text('');
        $.ajax({
            type: "post",
            url: seller_store_url,
            data: sellerData,
            success: function (data) {
                if (data.status == 'success') {
                    $('#sellerInfo').trigger('reset');
                    $('#notify').removeClass('d-none').find('p').addClass('text-success').removeClass('text-danger').text(data.message);
                } else {
                    $('#notify').removeClass('d-none').find('p').addClass('text-danger').removeClass('text-success').text(data.message);
                }
            },
            complete: function () {
                setTimeout(() => {
                    $('#notify').addClass('d-none');
                }, 5000);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                for (const key in xhr.responseJSON.errors) {
                    var error = xhr.responseJSON.errors;
                    $('input[name="'+ key +'"').siblings('span').text(error[key][0]);
                }
            }
        });
    });
});