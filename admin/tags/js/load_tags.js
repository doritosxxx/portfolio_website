document.addEventListener("DOMContentLoaded", function() {
    $.post("php/get_tags.php")
        .fail(function() {
            notification.new("Ошибка при подключении к базе данных");
        })
        .done(function(data) {
            var tags = JSON.parse(data);
            $tag_list = $("#tag_list");
            tags.forEach((tag, index) => {
                $tag_list.append(
                    `<div data-id="${tag.id}">
                        <span>${1+index}</span>
                        <div>${tag.name}</div>
                        <div class="delete">X</div>
                    </div>`
                );
            });
        })
        .always(function() {
            $("#tag_list").append(`<div id="new"></div>`);

            let tagsLoaded = new CustomEvent("tagsLoaded");
            document.dispatchEvent(tagsLoaded);
        });
});