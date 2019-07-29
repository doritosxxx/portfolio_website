let portfolio = [];
$.post("php/get_portfolio.php")
    .fail(function() {
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                notification.new("Произошла ошибка при подключении к базе данных");
            }, 500);
        });
    })
    .done(function(data) {
        temp = data;
        try {
            data = JSON.parse(data);
        } catch {
            console.error(`'${temp}'`);
        }

        if (!data.success) {
            notification.new(data.message);
            setTimeout(function() {
                location.replace("/admin");
            }, 2000);
        } else {
            //build portfolio_list
            $portfolio_list = $("#portfolio_list");
            portfolio = data.portfolio;
            data.portfolio.forEach(
                (row, i) => $portfolio_list.append(
                    `<div data-id="${row.id}">
                        <span>${i+1}</span>
                        <div class="image_wrapper">
                            <img src="${row.image}">
                        </div>
                        <div>
                            <h2>${row.title}</h2>
                            <div>${row.description.length<50?row.description:row.description.substr(0,50)+"..."}</div>
                        </div>
                        <div class="delete">X</div>
                    </div>`
                )
            );
        }
    }).always(function() {
        $("#portfolio_list").append(`<div id="new"></div>`);

        let portfolioLoaded = new CustomEvent("portfolioLoaded");
        document.dispatchEvent(portfolioLoaded);
    })