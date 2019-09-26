<?php defined("APP") or die("NO DIRECT ACESS !"); ?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <title><?=$title?></title>
</head>
<body>
    <ul>
        <li><a href="/?page=main">Main</a></li>
        <li><a href="/?page=contacts">Contats</a></li>
        <li><a href="/?page=info">Info</a></li>
    </ul>
    <?php
        include "./views/".$view.".php";
        ?>

</body>
</html>
