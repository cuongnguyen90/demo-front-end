
$(document).ready(function () {
    // console.log(3213);
    $(".box_menu_mobile ul li i").click(function () {
        if ($(this).parent().parent().hasClass('active')){
            $(this).parent().parent().parent().children().removeClass("active");
        }else{
            $(this).parent().parent().parent().children().removeClass("active");
            $(this).parent().parent().toggleClass("active");
        }


    })
    $("#menu_icon").click(function () {
        $("#box_menu").addClass("active");
    })
    $(".close_menu").click(function () {
        $("#box_menu").removeClass("active");
    })
    $(".box_breadcrum ul li").hover(function () {
        if ($(this).find("ul").length > 0){
            $(".box_breadcrum ul li").removeClass("active");
            $(this).addClass("active");
        }

    });


    $('.slider-features').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        dots: false,
        autoplay: true,
        lazyLoad:true,
        responsiveClass: true,
        navText:["<img src='/frontend_res/assets/img/arrow-left.png'/>","<img src='/frontend_res/assets/img/arrow-right.png'/>"],
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            }
        }
    })
    $('.slider-features-menu').owlCarousel({
        loop: true,
        margin: 15,
        nav: true,
        dots: false,
        autoplay: true,
        responsiveClass: true,
        navText:["<img src='/frontend_res/assets/img/arrow-left.png'/>","<img src='/frontend_res/assets/img/arrow-right.png'/>"],
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 5,
            }
        }
    })
    var window1 = $(window).width();
    if(window1 <= 767){
        $('.owl-slides').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            dots: false,
            responsiveClass: true,
            navText:["<img src='/frontend_res/assets/img/arrow-left.png'/>","<img src='/frontend_res/assets/img/arrow-right.png'/>"],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                }
            }
        })
    }else{
        $(window).scroll(function(){
            var scroll = $(this).scrollTop();
            // console.log(scroll);
            if ($("header").height() < scroll){
                $(".header_scroll").addClass("active");
            }else  $(".header_scroll").removeClass("active");
        });
    }

});

$(document).ready(function () {
    $('.carousel').carousel({
        carouselWidth: 1024,
        carouselHeight: 390,
        directionNav: true,
        shadow: true,
        buttonNav: 'bullets',
        pauseOnHover: true,
        autoplay: true,
        autoplayInterval: 5000,
    });

    $(".form_search a").click(function () {
        $(this).parent().toggleClass("active");
    })
    $('body').on('click',function(event){
        if(!$(event.target).is('.form_search img') && !$(event.target).is('.form_search input') && !$(event.target).is('.form_search a') && !$(event.target).is('.form_search i')){
            $(".form_search").removeClass("active");
        }
    });



});

function loadTinyMce(cl) {




    $('.' + cl).tinymce({
        script_url: '/frontend_res/assets/js/tinymce/tinymce.min.js',
        placholder: 'Bạn soạn thảo trước trong Microsoft Word hoặc các phần mềm hỗ trợ soạn thảo văn bản khác, sau đó paste nội dung vào đây. Điều này giúp hạn chế các lỗi phát sinh do mất điện, mất mạng đột ngột và các sự cố không mong muốn khác',
        width: "100%",
        height: 200,
        theme_advanced_fonts: "Arial=arial;",
        //theme_advanced_font_sizes: "12px, 14px, 18px, 24px, 36px",
        fontsize_formats: "8pt 9pt 10pt 11pt 12pt 26pt 36pt",
        toolbar: "insertfile undo redo | styleselect | fontselect | fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages | forecolor backcolor,media | table | fullscreen code",

        theme: "modern",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars",
            "insertdatetime media nonbreaking save contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager fullscreen",
            "code media table",
            "placeholder"
        ],
        extended_valid_elements: "audio[id|class|src|type|controls]",
        //extended_valid_elements: "audio[id|class|src|type|controls],script[language|type|src],style[type]",
        audio_template_callback: function (data) {
            return '<audio controls>' + '\n<source src="' + data.source1 + '"' + (data.source1mime ? ' type="' + data.source1mime + '"' : '') + ' />\n' + '</audio>';
        },
        menubar: "insert, table",
        media_live_embeds: true,
        media_alt_source: false,
        // external_filemanager_path: "/admin_resource/custom/plugin/filemanager/",
        relative_urls: false,
        remove_script_host: false,
        filemanager_title: "Responsive Filemanager",
        // external_plugins: {"filemanager": "/admin_resource/custom/plugin/filemanager/plugin.min.js"}
    });

}
