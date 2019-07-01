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

        <script src="/js/jquery.js"></script>

        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/header.css">
        <link rel="stylesheet" href="style/constructor.css">

        <script src="/js/prefixfree.js"></script>
        <!--prefixfree after css-->
    </head>

    <body>
        <header>
            <h1>Панель управления сайтом</h1>
            <nav id="tools">
                <div>Новый пост</div>
                <div>Управление постами</div>
                <div>Статистика</div>
                <div>dolor sit</div>
            </nav>
        </header>
        <main>
            <!--новый пост-->
            <div id="constructor">
                <div id="elements">
                    <div>
                        <div class="element">

                        </div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                    </div>
                    <div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                    </div>
                </div>
                <div id="workspace">
                    <div class="post">
                        <div class="block"></div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            footer. This is simply dummy text
        </footer>
    </body>

    </html>