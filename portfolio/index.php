<!DOCTYPE html>
<html>

<head>
    <title>Портфолио</title>
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

    <script src="js/header.js"></script>
    <script src="/js/menu.js"></script>
    <script src="js/up_button.js"></script>
    <script src="js/selector.js"></script>

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
        <div id="background_image"></div>
        <div id="block1">
            <h2>Портфолио</h2>
        </div>
        <div id="block2">
            <div id="category">
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
                    $category = $db->query("SELECT * FROM tags");
                    echo "<span data-id=\"0\">Все</span>";
                    while($row = mysqli_fetch_assoc($category)){
                        $name = $row['name'];
                        $id = $row["id"];
                        if($id == 0 )continue;
                        echo "<span data-id=\"$id\">$name</span>";
                    }
                ?>
            </div>
        </div>
        <div id="block3">
            <div id="portfolio">
                <?php
                    $portfolio = $db->query("SELECT id,title, tag FROM portfolio");
                    while($row = mysqli_fetch_assoc($portfolio)){
                        $id = $row["id"];
                        $title = $row["title"];
                        $tag = $row["tag"];
                        $image = "url(/getimagefromportfolio.php?id=$id)";
                        $href = "project/index.php?id=$id";
                        echo "
                            <div 
                                class=\"portfolio_item\" 
                                data-id=\"$id\" 
                                data-tag=\"$tag\"
                                style=\"background-image:$image\">
                                <a href=\"$href\">
                                <div class=\"title\">$title</div>
                                </a>
                            </div>
                        ";
                    }
                ?>

            </div>

        </div>
    </main>
    <footer>
        <span>© Дизайн-студия "Декор на Ордынке"</span>
    </footer>

</body>

</html>