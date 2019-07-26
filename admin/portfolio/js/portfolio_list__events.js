document.addEventListener("portfolioLoaded", function() {
    function clear_workspace() {
        $("#workspace img").attr("src", "");
        document.querySelector("#image").value = "";
        document.querySelector("#title").value = "";
        document.querySelector("#tag").value = 0;
        document.querySelector("#description").value = "";
        document.querySelector("#post_id").value = "-1";
    }

    function send_portfolio_item_to_workspace(id) {
        console.log(portfolio);
        clear_workspace();
        $("#workspace input[type=submit]").attr("value", "Редактировать");
        $("#workspace form").attr("action", "php/edit_portfolio_item.php");

        let index = 0;
        for (let i = 0; i < portfolio.length; i++) {
            if (portfolio[i].id === id) {
                index = i;
                break;
            }
        }

        $("#preview").attr("src", portfolio[index].image);
        $("#title").val(portfolio[index].title);
        $("#tag").val(portfolio[index].tag);
        $("#description").val(portfolio[index].description);
        $("#post_id").val(portfolio[index].id);
        $("#image").removeAttr("required");
        $("#workspace").show();
    }

    function start_creating_new_portfolio_item() {
        clear_workspace();
        $("#workspace input[type=submit]").attr("value", "Создать");
        $("#workspace form").attr("action", "php/upload_portfolio_item.php");
        $("#image").attr("required", "");
        $("#workspace").show();
    }

    function delete_portfolio_item(id) {
        $.post("php/delete_portfolio_item.php", {
            id: id
        }).fail(function() {
            notification.new("Не удалось удалить элемент по неизвестной причине");
        }).done(function(data) {
            data = JSON.parse(data);
            console.log(data);
            if (data.success) {
                $(`[data-id=${id}]`).hide(500, function() {
                    $(this).remove();
                }).nextAll().not("#new").each(function() {
                    let id = $(this).children("span").eq(0).text();
                    $(this).children("span").eq(0).text(id - 1);
                });
            }

        });
    }
    $("#portfolio_list>*:not(#new)").on("click", function() {
        send_portfolio_item_to_workspace($(this).attr("data-id"));
    });
    $("#new").on("click", function() {
        start_creating_new_portfolio_item();
    });
    $(".delete").on("click", function(event) {
        event.stopPropagation();
        delete_portfolio_item($(this).parent().attr("data-id"));
    });
});