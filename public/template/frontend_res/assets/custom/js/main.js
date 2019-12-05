$(document).ready(
    function () {
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        // if (isMobile ==false) {
        var t = setTimeout(function () {
            var $preloader = $('.preloader');
            if ($preloader.length > 0) {
                $preloader.delay(100).fadeOut('slow');
            }
        }, 0);
        var t = setTimeout(function () {
            var $preloader = $('#preloader-baimoi');
            if ($preloader.length > 0) {
                $preloader.delay(100).fadeOut('slow');
            }
        }, 0);
        // }

        //back to top
        $("body").append('<div id="back-top" '), $(window).scroll(function () {
            0 != $(this).scrollTop() ? $("#back-top").fadeIn() : $("#back-top").fadeOut()
        }), $("#back-top").click(function () {
            return $("html, body").animate({scrollTop: 0}, 500), !1
        })
    }
);

$('.btnPreviewArticle').click(function (event) {
    // var modal = $(this)
    // modal.find('.modal-body').val(recipient)
    //.modal("show")
    var art_id = $(this).data('id');
    console.log("id: " + art_id);
    $.get("/incoming/getArticleById", {at_id: art_id}, function (rs) {
        if (rs.status == 1) {
            $('.modal-title').html(rs.data.title);
            $('.modal-body').html(rs.data.content);
            $('#previewModal').modal("show");
        } else
            alert(rs.msg);

    });

});
/**
 * login social facebook
 */
$('.login-facebook').click(function () {
    var link = $('#login-facebook-link').val();
    window.open(link, "myWindow", "top=270, left=500, width=500, height=300");
});
/**
 * login social google
 */
$('.login-google').click(function () {
    var link = $('#login-google-link').val();
    window.open(link, "myWindow", "top=270, left=500, width=500, height=450");
});
