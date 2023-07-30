$(function() {
    $('#addMoreBtn').click(function (e) { 
        e.preventDefault();
        var counter = $(this).attr('data-count')
        $('#service').find('.form-label').attr('name', `data[${counter}][label]`);
        $('#service').find('.form-service').attr('name', `data[${counter}][service]`);
        let clone = $('#service').html();
      
        $('#append').append(clone);

        $(this).attr('data-count', Number(counter) + 1);
    });

    $(document).on('click', '#removeBtn', function (e) { 
        e.preventDefault();
        $(this).closest('.row').remove();
     });

     $('#saveBtn').click(function(e) {
        e.preventDefault();
       let services = $('#serviceInfo').serialize();
       $('.error').text('');
        $.ajax({
            type: "post",
            url: service_store_url,
            data: services,
            success: function (data) {
                if (data.status == 'success') {
                    $('#serviceInfo').trigger('reset');
                    $('#serviceInfo').find('.additional').remove();
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
                    var number = xhr.responseJSON.errors[key][0].match(/\d+/);
                    var field = 'label';
                    if (xhr.responseJSON.errors[key][0].indexOf("service") >= 0) {
                        field = 'service';
                    }
                    $('input[name="data[' + number + '][' + field + ']"').siblings('span').text('This field is required.')
                }
            }
        });
     });
});



