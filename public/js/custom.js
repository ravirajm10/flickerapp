jQuery(document).ready(function() {
    jQuery(document).on("click", ".btn", function(){
        var sizeTypeValue = jQuery(this).attr('id');
        jQuery(".btn").removeClass("btn-primary").addClass("btn-default");
        jQuery("#"+sizeTypeValue).removeClass("btn-default").addClass("btn-primary");
        jQuery.ajax({
            url: "/photo-list",
            method: 'get',
            dataType: "html",
            data: { sizeType: sizeTypeValue},
            success: function (response) {
                jQuery('div.panel-body').html(response);
            },
            error: function () {
                jQuery('div.panel-body').html("There is problem to load the images of respective size.");
            }
        })
    })
});

