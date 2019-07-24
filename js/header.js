document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");
    const menu = document.querySelector("#main_menu");
    let currentOffsetY = 0;

    const main = document.querySelector("main");
    main.addEventListener("scroll", function() {
        if (main.scrollTop > currentOffsetY) { //scroll down
            if (header.classList.contains("show")) {
                header.classList.remove("show");
                menu.classList.remove("add_padding");
            }
        } else if (main.scrollTop < currentOffsetY) { //scroll up
            if (!header.classList.contains("show")) {
                header.classList.add("show");
                menu.classList.add("add_padding");
            }
        }

        currentOffsetY = main.scrollTop;
    });
});