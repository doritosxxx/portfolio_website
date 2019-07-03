document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector("header");
    let currentOffsetY = 0;
    document.addEventListener("scroll", function(event) {
        if (event.pageY > currentOffsetY) { //scroll down
            if (header.classList.contains("show")) {
                header.classList.remove("show");
            }
        } else if (event.pageY < currentOffsetY) { //scroll up
            if (!header.classList.contains("show")) {
                header.classList.add("show");
            }
        }

        currentOffsetY = event.pageY;
    });
});