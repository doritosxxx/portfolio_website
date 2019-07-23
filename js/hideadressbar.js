function hideAddressBar() {
    setTimeout(function() {
        document.body.style.height = window.outerHeight + 'px';
        setTimeout(function() {
            window.scrollTo(0, 1);
        }, 1100);
    }, 1000);
}
window.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("orientationchange", function() {
        hideAddressBar();
    }, false);
});
setInterval(function() { document.querySelector("html").scroll(0, 0) }, 2000);