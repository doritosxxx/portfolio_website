function hideAddressBar() {
    setTimeout(function() {
        document.body.style.height = "100vh";
        setTimeout(function() {
            window.scrollTo(0, 1);
        }, 1100);
    }, 1000);
}
window.addEventListener("DOMContentLoaded", function() {
    hideAddressBar();
    window.addEventListener("orientationchange", function() {
        hideAddressBar();
    }, false);
});
setInterval(function() { window.scrollTo(0, 9999999999999999); }, 2000);