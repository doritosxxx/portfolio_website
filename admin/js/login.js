$().ready(function() {

    $("#form").on("submit", function(event) {
        event.preventDefault();
        $.ajax({
            method: "post",
            url: "./login.php",
            data: $(this).serialize(),
            error: function(a, b, c) {
                notification.new("Неизвестная ошибка");
            },
            success: function(response) {
                response = JSON.parse(response);
                console.log(response);
                notification.new(response.message);

            }
        });

    });
});