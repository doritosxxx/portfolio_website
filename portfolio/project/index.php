<?php
$db_info =[
    "username"=>"Qhve9YdhKG",
    "db_name"=>"Qhve9YdhKG",
    "password"=>"AvVYDL39iH",
    "server"=>"remotemysql.com",
    "port"=>"3306"
];

$db = new mysqli(
    $db_info['server'],
    $db_info['username'],
    $db_info['password'],
    $db_info['db_name'],
    $db_info['port']
);
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$project = mysqli_fetch_assoc($db->query("SELECT title,description FROM portfolio WHERE id = \"$id\""));
if($project === null){
    header("Location: ../");
}

$title = $project["title"];
$description = $project["description"];
$image = "/getimagefromportfolio.php?id=$id";

?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Проект</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />

        <!--loader-->
        <link rel="stylesheet" href="/style/loader.css">
        <script src="/js/loader.js"></script>

        <!--font-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="/style/up_button.css">
        <link rel="stylesheet" href="/style/default.css">
        <link rel="stylesheet" href="/style/header.css">
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="/style/footer.css">
        <link rel="stylesheet" href="/style/menu.css">

        <script src="/js/jquery.js"></script>

        <script src="/portfolio/js/header.js"></script>
        <script src="/js/menu.js"></script>
        <script src="js/up_button.js"></script>

        <script src="/js/prefixfree.js"></script>

    </head>

    <body>
        <div id="loader">
            <div></div>
            <div></div>
        </div>

        <div id="up"></div>

        <div id="main_menu" class="add_padding">

            <div>
                <a href="/">Главная</a>
            </div>
            <div>
                <a href="/about/">
                О нас
            </a>
            </div>
            <div>
                <a href="/services/">
                Услуги
            </a>
            </div>
            <div>
                <a href="/portfolio/">
                Портфолио
            </a>
            </div>
            <div>
                <a href="/contacts/">
                Связаться
            </a>
            </div>

            <div id="follow">
                <span>Follow me</span>
                <div id="social">
                    <a target="_blank" href="https://ru-ru.facebook.com/people/%D0%90%D0%BD%D0%B0%D1%81%D1%82%D0%B0%D1%81%D0%B8%D1%8F-%D0%94%D1%83%D0%BD%D0%B0%D0%B5%D0%B2%D0%B0/100004245519207">
                        <img src="/img/facebook.svg" alt="facebook">
                    </a>
                    <a target="_blank" href="https://www.instagram.com/design_dekor_dunaeva/">
                        <img src="/img/instagram.svg" alt="instagram">
                    </a>

                </div>
            </div>
        </div>

        <header class="show">
            <a href="/">
                <div id="home_button">
                    home
                </div>
            </a>
            <div id="menu_button">
                <span>menu</span>
                <div class="burger"></div>
            </div>
        </header>

        <main>
            <div id="block1">
                <img src="<?=$image?>" alt="<?=$title?>">
            </div>
            <div id="block2">
                <h1>
                    <?=$title?>
                </h1>
            </div>
            <div id="block3">
                <div id="description">
                    <?=$description?>
                </div>

            </div>
        </main>
        <footer>
            <span>© Дизайн-студия "Декор на Ордынке"</span>
        </footer>

    </body>

    </html>