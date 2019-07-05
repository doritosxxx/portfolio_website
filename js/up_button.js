document.addEventListener("DOMContentLoaded", function() {

    const main = $("main");

    $("#up").on("click", function() {
        main.animate({
            scrollTop: 0,
        }, 1000);
    });

    let show = undefined;

    if (main.scrollTop() === 0) {
        $("#up").hide();
        show = false;
    } else {
        $("#up").show().css({
            opacity: 1
        });
        show = true;
    }


    main.on("scroll", function(event) {
        if (!show && main.scrollTop() > 0) {
            $("#up").show().animate({
                opacity: 1
            }, 400);
            show = true;
        } else if (show && main.scrollTop() === 0) {
            $("#up").animate({
                opacity: 0
            }, 400, function() {
                $(this).hide();
                show = false;
            });
        }
    });
});