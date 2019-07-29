document.addEventListener("DOMContentLoaded", function() {
    let selected = 0;
    let $elements = $("#category>span");
    $elements.eq(0).addClass("selected");
    $elements.on("click", function() {
        $elements.eq(selected).removeClass("selected");
        selected = $(this).index();
        $(this).addClass("selected");

        let id = +$(this).attr("data-id");

        if (id === 0) {
            $(".portfolio_item").show(300);
        } else {
            $(`.portfolio_item[data-tag!=${id}]`).hide(300);
            $(`.portfolio_item[data-tag=${id}]`).show(300);
        }

    });
});