$(document).ready(function () {
    $("html , body").niceScroll();
    // submenu items for about page
    $(".scroll-panel").click(function () {
        href = $(this).attr("href");
//        console.log($(href).position());
        var top = 0;
        if (href === "#mission") {
            top = 255;
        }
        else if (href === "#team") {
            top = 375;
        }
        else if (href === "#contact") {
            top = 500;
        }
        else {
            top = 630;
        }
        if ($(href + "_i").hasClass("fa-angle-double-down")) {
            $('.scroll-panel i').not(this).each(function () {
                $(this).removeClass('fa-angle-double-down');
                $(this).addClass("fa-angle-double-down");
            });
            $(href + "_i").removeClass("fa-angle-double-down");
            $(href + "_i").addClass("fa-angle-double-up");
        }
        else {
            $('.scroll-panel i').not(this).each(function () {
                $(this).removeClass('fa-angle-double-up');
                $(this).addClass("fa-angle-double-up");
            });
            $(href + "_i").removeClass("fa-angle-double-up");
            $(href + "_i").addClass("fa-angle-double-down");
        }
        $('html, body').animate({
            scrollTop: top
        }, 800);
    });


    $(".scroll-panel-music").click(function () {
        href = $(this).attr("href");
//        console.log($(href).position());
        var top = 0;
        if (href === "#mgmt") {
            top = 260;
        }
        else if (href === "#records") {
            top = 380;
        }
        if ($(href + "_i").hasClass("fa-angle-double-down")) {
            $('.scroll-panel-music i').not(this).each(function () {
                $(this).removeClass('fa-angle-double-down');
                $(this).addClass("fa-angle-double-down");
            });
            $(href + "_i").removeClass("fa-angle-double-down");
            $(href + "_i").addClass("fa-angle-double-up");
        }
        else {
            $('.scroll-panel i').not(this).each(function () {
                $(this).removeClass('fa-angle-double-up');
                $(this).addClass("fa-angle-double-up");
            });
            $(href + "_i").removeClass("fa-angle-double-up");
            $(href + "_i").addClass("fa-angle-double-down");
        }
        
        $('html, body').animate({
            scrollTop: top
        }, 800);
    });
});
