<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Můj Web</title>
</head>

<body>
    <div id="full_site">
        <div id="background">
            <div id="header">
                <div id="menu">
                    <h1 id="logo">Filip Dubček</h1>

                    <ul id="menu_ul">
                        <li class="menu_li"><a href="./">About</a></li>
                        <li class="menu_li"><a href="?page=contacts">Contact</a></li>
                        <li class="menu_li"><a href="?page=together">Cooperation</a></li>
                        <li class="menu_li"><a href="?page=work">Gallery</a></li>
                        <li class="menu_li"><a href="?page=feedback">Feedback</a></li>
                    </ul>
                </div>
            </div>

</body>

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

<div class="clear">&nbsp;</div>

<div class="clear">

    <div id="info">
        <h1>I am <span id="velky">Filip Dubček</span> </h1>
        <h2>And I'm a Programmer</h3>

    </div>
</div>



<div id="footer">
    <ul id="pata_ul">
        <li class="pata_li"><a class="pata_a" href="https://twitter.com/julesforrest">Twitter</a></li>
        <li class="pata_li"><a class="pata_a" href="https://codepen.io/julesforrest">Codepen</a></li>
        <li class="pata_li"><a class="pata_a" href="mailto:julesforrest@gmail.com">Email</a></li>
        <li class="pata_li"><a class="pata_a" href="https://dribbble.com/julesforrest">Dribbble</a></li>
        <li class="pata_li"><a class="pata_a" href="https://github.com/julesforrest">Github</a></li>
        <li class="pata_li">
            <p id="pata_p">👋</p>
        </li>
    </ul>

</div>


</body>

</html>