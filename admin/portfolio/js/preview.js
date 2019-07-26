document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("#image").addEventListener("change", function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector("#preview").setAttribute("src", e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
});