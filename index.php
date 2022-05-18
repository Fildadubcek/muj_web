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
                <nav id="hamnav">
                    
                    <label for="hamburger">&#9776;</label>
                    <input type="checkbox" id="hamburger" />
                    <div id="hamitems">
                        <a href="?page=about">About</a>
                        <a href="?page=contacts">Contact</a>
                        <a href="?page=together">Cooperation</a>
                        <a href="?page=work">Gallery</a>
                        <a href="?page=feedback">Feedback</a>
                    </div>
                </nav>
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