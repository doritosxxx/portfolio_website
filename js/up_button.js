document.addEventListener("DOMContentLoaded", function() {
    $("#up").on("click", function() {
        $("main").animate({
            scrollTop: 0,
        }, 1000);
    });

    let previousScrollTop = 0;

    $("#up").hide();

    $("main").on("scroll", function(event) {
        if (this.scrollTop > 0 && previousScrollTop === 0) {
            $("#up").show().animate({
                opacity: 1
            }, 400);
        } else if (this.scrollTop === 0 && previousScrollTop > 0) {
            $("#up").animate({
                opacity: 0
            }, 400, function() {
                $(this).hide();
            });
        }
        previousScrollTop = this.scrollTop;
    });
});