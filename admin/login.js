$().ready(function() {
    $("#form").on("submit", function(event) {
        event.preventDefault();
        $.ajax({
            method: "post",
            url: "login.php",
            data: $(this).serialize(),
            error: function(a, b, c) {
                console.error(a, b, c);
            },
            success: function(response) {
                console.log(response);
            }
        });

    });
});