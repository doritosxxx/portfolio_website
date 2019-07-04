document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");
    let currentOffsetY = 0;

    const main = document.querySelector("main");
    main.addEventListener("scroll", function() {
        if (main.scrollTop > currentOffsetY) { //scroll down
            if (header.classList.contains("show")) {
                header.classList.remove("show");
            }
        } else if (main.scrollTop < currentOffsetY) { //scroll up
            if (!header.classList.contains("show")) {
                header.classList.add("show");
            }
        }

        currentOffsetY = main.scrollTop;
    });
});