document.addEventListener("DOMContentLoaded", function() {
    const menu = document.querySelector("#main_menu");

    document.querySelector("#menu_button").addEventListener("click", function() {
        menu.classList.toggle("show");
    });
});