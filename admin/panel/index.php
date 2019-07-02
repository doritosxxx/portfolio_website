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
        <script src="/js/vue.js"></script>

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
                <breadcrumbs-item 
                    v-for="item in items" 
                    :key="item.id" 
                    :data="item" 
                    :class="{selected: menu_item.selected === item.id}"
                    >
                </breadcrumbs-item>
            </nav>
        </header>
        <main>
            <!--новый пост-->
            <div id="constructor" v-if="this.selected===0">
                <div id="elements">
                    <div>
                        <div class="element">
                            <span style="font-size:5em">T</span>
                            <span>Заголовок</span>
                        </div>
                        <div class="element">
                            <img src="" alt="Текст">
                            <span>Текст</span>
                        </div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                        <div class="element"></div>
                    </div>
                    <div>
                        <div class="element">
                            <img src="https://images2.pixlis.com/background-image-vertical-lines-and-stripes-seamless-tileable-black-white-22rwu8.png" alt="Горизонтальная разметка">
                            <div>Горизонтальная разметка</div>
                        </div>
                        <div class="element">
                            <img style="transform:rotate(90deg);" src="https://images2.pixlis.com/background-image-vertical-lines-and-stripes-seamless-tileable-black-white-22rwu8.png" alt="Вертикальная разметка">
                            <span>Вертикальная разметка</span>
                            </div>
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
            <div id="post_management" v-if="this.selected===1">
                Управление постами
            </div>
            <div id="statistics" v-if="this.selected===2">
                Статистика
            </div>
            <div v-if="this.selected===3">
                
            </div>
            <div v-if="this.selected===4"></div>
        </main>
        <footer>
            footer. This is simply dummy text
        </footer>
    </body>
    <script src="js/breadcrumbs_menu.js"></script>

    </html>