<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>Můj Web</title>
</head>

<body>
    <div id="full_site">
        <div id="background">
            <div id="header">
                <div id="menu">
                    <h1>FILIP DUBČEK</h1>
                    <ul>
                        <li><a href="./">O mně</a></li>
                        <li><a href="?page=work">Moje práce</a></li>
                        <li><a href="?page=together">Spolupráce</a></li>
                        <li><a href="?page=contacts">Kontakty</a></li>
                    </ul>
                    <?php
                    $page = filter_input(INPUT_GET, "page");
                    if (!isset($page)) {
                        $page = "about";
                    }
                    $file = 'includes/' . $page . '.php';
                    if (file_exists($file)) {
                        include_once $file;
                    } else {
                        include_once 'includes/error.php';
                    }
                    ?>
                </div>
                <div class="clear">&nbsp;</div>
            </div>
            <div class="clear">

                <div id="info">
                    <h1>I am <span id="velky">Filip Dubček</span> </h1>
                    <h2>And I'm a Programmer</h3>
               
                </div>
            </div>



            <div id="footer">
                <div id="vlevo">
                    <h1>Kde mě můžeš najít?</h1>
                </div>
                <div id="vpravo">
                    <a href="https://www.facebook.com/filip.dubcek/" target="_blank"><img class="icons" src="/img/facebook.png" height="50px" width="50px"></a>
                    <a href="https://www.instagram.com/filda_dubcek/" target="_blank"><img class="icons" src="/img/instagram.png" height="50px" width="50px"></a>
                    <a href="https://www.tiktok.com/@kamenchytilvlak" target="_blank"><img class="icons" src="/img/tiktok.png" height="50px" width="50px"></a>
                </div>

            </div>
        </div>
<





</body>

</html>