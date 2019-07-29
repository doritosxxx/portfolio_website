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

        <!--notifications-->
        <link rel="stylesheet" href="/style/notification.css">
        <script src="/js/notification.js"></script>

        <script src="js/load_tags.js"></script>
        <script src="js/tag_list__events.js"></script>


        <link rel="stylesheet" href="../style/main.css">
        <link rel="stylesheet" href="../style/header.css">

        <link rel="stylesheet" href="style/tags.css">

        <!--prefixfree after css-->
        <script src="/js/prefixfree.js"></script>

    </head>

    <body>
        <header>
            <h1>Панель управления сайтом</h1>
            <nav id="tools">
                <a href="../portfolio">
                    Управление портфолио
                </a>
                <a href="../tags" class="selected">Управление тегами</a>
                <a href="../statistics">
                    Статистика
                </a>
            </nav>
        </header>
        <main>
            <div id="tag_wrapper">
                <h2>Список тегов</h2>
                <div id="tag_list"></div>
            </div>
            <div style="width:20px; height: 100%">
                <!--space-->
            </div>
            <div id="tag_edit">
                <h2>Редактирование</h2>
                <div id="workspace" style="display:none">
                    <form action="" method="post">
                        <div>
                            <span>Название тега:</span>
                            <input type="text" name="tag" id="tag" required>
                        </div>
                        <input type="submit" value="Создать">
                    </form>
                </div>
            </div>
        </main>
    </body>

    </html>