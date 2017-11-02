<?php
session_start();
echo "<script src='../functions/display.js'></script>";

$mysqli = new mysqli("localhost", "id3409735_dimooooon", "pass129049000", "id3409735_wtwd");

if (!$mysqli->connect_error) {
    $sql = "INSERT INTO my_music VALUES(";

    $_SESSION = $_REQUEST;
    foreach ($_REQUEST as $value)
        $sql .= "'" . $value . "', ";

    $sql = substr($sql, 0, -22);
    $sql .= ")";

    $mysqli->query($sql);
    if (!$mysqli->errno) {
        echo "<script>redirection('view_field.php')</script>";
    } else echo "Ошибка (" . $mysqli->errno . ")" . $mysqli->error;

} else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);