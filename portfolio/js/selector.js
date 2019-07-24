document.addEventListener("DOMContentLoaded", function() {
    let selected = 0;
    let $elements = $("#category>span");
    $elements.on("click", function() {
        $elements.eq(selected).removeClass("selected");
        selected = $(this).index();
        $(this).addClass("selected");
    });
});