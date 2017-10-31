<?php

$mysqli = new mysqli("localhost", " id3409735_dimooooon", "pass129049000");

if (!$mysqli->connect_error) {

    $sql = "INSERT INTO my_music VALUES(";


    foreach ($_REQUEST as $value)
        $sql .= $value . ", ";
    $sql .= ")";
    $sql = substr($sql, 0, -12);

    if ($mysqli->query($sql)) {
        header("Location: view_field.php");
    } else echo "Ошибка (" . $mysqli->errno . ")" . $mysqli->error;

} else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);