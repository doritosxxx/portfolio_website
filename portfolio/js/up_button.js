document.addEventListener("DOMContentLoaded", function() {

    $("#up").on("click", function() {
        $("html").animate({
            scrollTop: 0,
        }, 1000);
    });

    let show = undefined;

    if (window.scrollY === 0) {
        $("#up").hide();
        show = false;
    } else {
        $("#up").show().css({
            opacity: 1
        });
        show = true;
    }



    document.addEventListener("scroll", function(event) {
        if (!show && window.scrollY > 0) {
            $("#up").show().animate({
                opacity: 1
            }, 400);
            show = true;
        } else if (show && window.scrollY === 0) {
            $("#up").animate({
                opacity: 0
            }, 400, function() {
                $(this).hide();
                show = false;
            });
        }
    });
});