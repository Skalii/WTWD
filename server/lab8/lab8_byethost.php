<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 8</title>
</head>
<body>
<hr width=30%>
<div align='center'>
    | <a href="../lab7/lab7.html">Л.р. №7</a>
    | <a href="lab8_byethost.php">Л.р. №8</a>
    | <a href="../lab9/lab9.html">Л.р. №9</a>
    | <a href="../lab10/lab10.html">Л.р. №10</a>
    | <a href="../lab11/lab11.html">Л.р. №11</a> |
</div>
<hr width=30%>
<div style="font-size: 20px;">
    <?php
    $mysqli = new mysqli("sql206.byethost3.com:3306", "b3_20939404", "pass129049b");

    if (!$mysqli->connect_error) {

        $mysqli->select_db("b3_20939404_WTWD");
        $db = $mysqli->query("SELECT DATABASE()");
        $row = $db->fetch_row();
        $db->close();

        echo "Подключение <span style ='color: limegreen;'>установлено!</span>";

        echo "<p>База: <ul><li style='color: blue;'>$row[0]</li>";

        $tables = $mysqli->query("SHOW TABLES");

        if (!$mysqli->errno) {
            echo "<br>Таблицы: <br><ul>";

            while ($table = $tables->fetch_assoc()) {
                echo "<br><li style='color: orangered;'>" . $table["Tables_in_".$row[0]] . "</li>";

                $columns = $mysqli->query(
                    "SHOW COLUMNS FROM " . $table["Tables_in_".$row[0]]);

                if (!$mysqli->errno) {
                    echo "<br>Поля: <br><br><ul>";

                    while ($column = $columns->fetch_assoc()) {
                        echo "<li style='color: darkcyan;'>" . $column["Field"] . "</li>";
                    }

                    echo "</ul>";
                } else echo "<br>Ошибка (" . $mysqli->errno . ")" . $mysqli->error;

            }

            echo "</ul>";
        } else echo "<br>Ошибка (" . $mysqli->errno . ")" . $mysqli->error;

        echo "</ul></p>";
    } else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);
    ?>
</div>
</body>
</html>