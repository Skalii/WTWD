<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 10</title>
    <script src="../lab7/display.js"></script>
</head>
<body>
<hr width=345px align='left'>
<div align='left'>
    | <a href="../lab7/lab7.html">Л.р. №7</a>
    | <a href="../lab8/lab8.php">Л.р. №8</a>
    | <a href="../lab9/lab9.html">Л.р. №9</a>
    | <a href="lab10.html">Л.р. №10</a>
    | <a href="../lab11/lab11.html">Л.р. №11</a> |
</div>
<hr width=345px align='left'>
<?php

$mysqli = new mysqli("localhost", "id3409735_dimooooon", "pass129049000", "id3409735_wtwd");

    function sortRecord($field) {
        $mysqli = $GLOBALS['mysqli'];
        if (!$mysqli->connect_error) {

            

        } else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);
}

?>
<h1>Мое меню</h1>
<p><strong>Моя музыка</strong></p>
<strong>Упорядочить по:</strong>
<ul>
    <li><a href="javascript: hiding('id')">ID</a>
        <span id="id" style="display: none">
            <?php
            sortRecord('id');
            ?>
        </span>
    </li>
    <li><a href="sort_date.php">Дате</a></li>
    <li><a href="sort_title.php">Названию</a></li>
    <li><a href="sort_fname.php">Имени</a></li>
</ul>
</body>
</html>