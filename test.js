$().ready(function() {
    $.ajax({
        method: "POST",
        url: "data.php",
        error: function(a, b, c) {
            console.error(a, b, c);
        },
        success: function(data) {
            $("#data").text(data);
        }
    });
});