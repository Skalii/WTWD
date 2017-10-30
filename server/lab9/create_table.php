<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 9</title>
</head>
<body>
<hr width=345px align='left'>
<div align='left'>
    | <a href="../lab7/lab7.html">Л.р. №7</a>
    | <a href="../lab8/lab8.php">Л.р. №8</a>
    | <a href="lab9.html">Л.р. №9</a>
    | <a href="../lab10/lab10.html">Л.р. №10</a>
    | <a href="../lab11/lab11.html">Л.р. №11</a> |
</div>
<hr width=345px align='left'>
<?php
$sql = "CREATE TABLE " . $_SESSION["nameTable"] . " (";

for ($i = 0; $i < $_SESSION["quantityFields"]; $i++) {
    $sql .= $_REQUEST["fieldName"][$i] . " " . $_REQUEST["fieldType"][$i];

    if ($_REQUEST["fieldSize"][$i])
        $sql .= "(" . $_REQUEST["fieldSize"][$i] . "), ";
    else
        $sql .= ", ";
}
$sql = substr($sql, 0, -2);
$sql .= ");";

$mysqli = new mysqli("localhost", "id3409735_dimooooon", "pass129049000", "id3409735_wtwd");
if (!$mysqli->connect_error) {

    $query = $mysqli->query($sql);

    if (!$mysqli->errno) {
        echo "<h1>Содана таблица " . $_SESSION["nameTable"] . "</h1>
              <script> var url = '../lab8/lab8.php'</script>
              <input type='button' onclick='(function(){document.location.replace(url);})()' value='Посмотреть таблицы'>";
    } else echo "Ошибка (" . $mysqli->errno . ")" . $mysqli->error;
} else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);
?>
</body>
</html>