jQuery(function ($) {


    function load_data(query) {
        $.ajax({
            beforeSend: function () {
                $('.ajax-loader').css("visibility", "visible");
                $('.ajax-loader-status').css("visibility", "hidden");
            },
            url: "/request/validate.php",
            method: "POST",
            data: {query: query},
            success: function (data) {
                $('#result').html(data);
                $('.ajax-loader-status').css("visibility", "visible");
                $('.ajax-loader-error').css("visibility", "hidden");
                $('#search_postcode').css("border", "1px solid #008000");
            }, complete: function () {
                $('.ajax-loader').css("visibility", "hidden");
            }, error: function () {
                /*
                 $("#result").remove();
                 */
                $('.ajax-loader-error').css("visibility", "visible");
                $('#search_postcode').css("border", "1px solid #ff000f");
            }
        });
    }

    $('#search_postcode').keyup(function () {
        var search = $(this).val();
        var len = search.length;
        if (len >= 4) {
            if (search != '') {
                load_data(search);
            } else {
                $('.ajax-loader-status').css("visibility", "hidden");
            }
        }
    });

    function check_param(value, cat) {
        $.ajax({
            url: "/request/get-form.php",
            method: "POST",
            data: {
                formtype: value,
                formmain: cat
            },
            success: function (data) {
                $('#result').html(data);

            }
        })

    };

    $('#change_chekbox').change(function () {
        var value = $(this).val();
        var cat = $(this).find(':selected').attr('data-value');
        check_param(value, cat);
    });

});