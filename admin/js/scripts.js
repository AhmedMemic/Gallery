$(document).ready(function() {

    var user_href;
    var user_href_splitted;
    var user_id;
    var image_src;
    var image_href_splitted;
    var image_name;

    $(document).on('click', '.modal_thumbnails', function() {
        $("#set_user_image").prop('disabled', false);

        user_href = $("#user-id").prop('href');
        user_href_splitted = user_href.split("=");
        user_id = user_href_splitted[user_href_splitted.length - 1];

        image_src = $(this).prop("src");
        image_href_splitted = image_src.split("/");
        image_id = image_href_splitted[image_href_splitted.length - 1];

    });

    $(document).on('click', '#set_user_image', function() {
        $.ajax({
            url: "includes/ajax_code.php",
            data:{image_name: image_name, user_id:user_id},
            type: "POST",
            success:function(data) {
                if(!data.error) {
                    $(".user_image_box a img").prop('src', data);       
                }
            }
        });
    });
});

