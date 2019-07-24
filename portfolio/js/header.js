document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");
    const menu = document.querySelector("#main_menu");
    let currentOffsetY = 0;

    document.addEventListener("scroll", function() {

        if (window.scrollY > currentOffsetY) { //scroll down
            if (header.classList.contains("show")) {
                header.classList.remove("show");
                menu.classList.remove("add_padding");
            }
        } else if (window.scrollY < currentOffsetY) { //scroll up
            if (!header.classList.contains("show")) {
                header.classList.add("show");
                menu.classList.add("add_padding");
            }
        }

        currentOffsetY = window.scrollY;
    });
});