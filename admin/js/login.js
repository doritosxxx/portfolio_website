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
                notification.new(response.message);
                if (response.success === true) {
                    setTimeout(
                        () => location.replace("portfolio/"), 1000
                    );
                }
            }
        });

    });
});