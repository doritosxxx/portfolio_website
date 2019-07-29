document.addEventListener("tagsLoaded", function() {
    function clear_workspace() {
        $("#tag").val();
    }

    function start_editing_tag(id) {
        $("#workspace").show();
        $("form").attr("action", "php/edit_tag.php");
    }

    function start_creating_new_tag() {
        $("#workspace").show();
        $("form").attr("action", "php/create_tag.php");
    }

    function delete_tag(id) {
        $.post("php/delete_tag.php", {
            id: id
        }).fail(function() {
            notification.new("Не удалось удалить элемент по неизвестной причине");
        }).done(function(data) {
            data = JSON.parse(data);
            if (data.success) {
                $(`[data-id=${id}]`).hide(500, function() {
                    $(this).remove();
                }).nextAll().not("#new").each(function() {
                    let id = $(this).children("span").eq(0).text();
                    $(this).children("span").eq(0).text(id - 1);
                });
            } else {
                notification.new(data.message);
            }

        });
    }
    $("#new").on("click", function() {
        clear_workspace();
        start_creating_new_tag();
    });
    $(".delete").on("click", function() {
        event.stopPropagation();
        delete_tag($(this).parent().attr("data-id"));
    });
});