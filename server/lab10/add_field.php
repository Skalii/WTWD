<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 10</title>
    <script src="../lab7/checkForm.js"></script>
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

$mysqli = new mysqli("localhost", " id3409735_dimooooon", "", "id3409735_wtwd");

if (!$mysqli->connect_error) {





    echo "<h1>Добавлена запись: </h1>";


} else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);

?>

</body>
</html>
