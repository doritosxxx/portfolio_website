document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#theme").addEventListener("click", function() {
        let html = document.querySelector("html");
        if (html.getAttribute("theme") === "dark") {
            html.setAttribute("theme", "light");
        } else {
            html.setAttribute("theme", "dark");
        }
    });
});