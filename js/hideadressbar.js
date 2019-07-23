function hideAddressBar() {
    document.querySelector("#main_menu").scrollTo(0, 1);
}
window.addEventListener("DOMContentLoaded", function() {
    hideAddressBar();
    window.addEventListener("orientationchange", function() {
        hideAddressBar();
    }, false);
});