<?php
session_start();
if(!$_SESSION['admin']){
    header("Location: /admin/");
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>admin panel</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="/js/jquery.js"></script>

        <script src="js/load_portfolio.js"></script>
        <script src="js/preview.js"></script>
        <script src="js/portfolio_list__events.js"></script>

        <!--notifications-->
        <link rel="stylesheet" href="/style/notification.css">
        <script src="/js/notification.js"></script>


        <link rel="stylesheet" href="../style/main.css">
        <link rel="stylesheet" href="../style/header.css">
        <link rel="stylesheet" href="style/portfolio.css">

        <!--prefixfree after css-->
        <script src="/js/prefixfree.js"></script>

    </head>

    <body>
        <header>
            <h1>Панель управления сайтом</h1>
            <nav id="tools">
                <a href="../portfolio" class="selected">Управление портфолио</a>
                <a href="../tags">Управление тегами</a>
                <a href="../statistics">Статистика</a>
            </nav>
        </header>
        <main>

            <div id="portfolio">
                <div id="portfolio_wrapper">
                    <h2>Список работ</h2>
                    <div id="portfolio_list"></div>
                </div>
                <div style="width:20px; height: 100%">
                    <!--space-->
                </div>

                <div id="portfolio_edit">
                    <h2>Редактирование</h2>
                    <div id="workspace" style="display:none">
                        <form action="php/upload_portfolio_item.php" method="post" enctype="multipart/form-data">
                            <div id="preview_wrapper">
                                <img src="" id="preview" alt="Загружаемая фотография">
                            </div>
                            <input type="file" name="image" id="image" accept="image/*" required>

                            <div class="float_left">
                                <label for="title">Заголовок: </label>
                                <input type="text" name="title" id="title" required>
                            </div>
                            <div class="float_left">
                                <label for="tag">Тег</label>
                                <select name="tag" id="tag" required="">
                                    <option value="0">no tag</option>
                                </select>
                            </div>
                            <textarea required name="description" id="description" cols="30" rows="10" placeholder="Описание"></textarea>
                            <input type="hidden" name="post_id" id="post_id">
                            <input type="submit">
                        </form>
                    </div>
                </div>

            </div>

        </main>
    </body>

    </html>