<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 8</title>
</head>
<body>
<hr width=345px align='left'>
<div align='left'>
    | <a href="../lab7/lab7.html">Л.р. №7</a>
    | <a href="lab8.php">Л.р. №8</a>
    | <a href="../lab9/lab9.html">Л.р. №9</a>
    | <a href="../lab10/lab10.html">Л.р. №10</a>
    | <a href="../lab11/lab11.php">Л.р. №11</a> |
</div>
<hr width=345px align='left'>
<div style="font-size: 20px;">
    <?php
    $mysqli = new mysqli("localhost", "id3409735_dimooooon", "pass129049000");

    if (!$mysqli->connect_error) {
        echo "Подключение <span style ='color: limegreen;'>установлено!</span>";

        $dbs = $mysqli->query("SHOW DATABASES");
        if (!$mysqli->errno) {


            while ($db = $dbs->fetch_assoc()) {
                echo "<br><br>База: <ul>";
                echo "<li style='color: orangered;'>" . $db["Database"] . "</li>";

                $mysqli->select_db($db["Database"]);
                $select = $mysqli->query("SELECT DATABASE()");
                $row = $select->fetch_row();

                $tables = $mysqli->query("SHOW TABLES");
                if (!$mysqli->errno) {

                    while ($table = $tables->fetch_assoc()) {
                        echo "<br>Таблица: <br><ul>";
                        echo "<br><li style='color: blue;'>" . $table["Tables_in_" . $row[0]] . "</li>";

                        $columns = $mysqli->query("SHOW COLUMNS FROM " . $table["Tables_in_" . $row[0]]);
                        if (!$mysqli->errno) {
                            echo "<br>Поля: <br><br><ul>";

                            while ($column = $columns->fetch_assoc()) {
                                echo "<li style='color: darkcyan;'>" . $column["Field"] . "</li>";
                            }

                            echo "</ul></ul>";
                        } else echo "<br>Ошибка (" . $mysqli->errno . ")" . $mysqli->error;
                    }

                    echo "</ul>";
                } else echo "<br>Ошибка (" . $mysqli->errno . ")" . $mysqli->error;
            }

        } else echo "<br>Ошибка (" . $mysqli->errno . ")" . $mysqli->error;

    } else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);
    ?>
</div>
</body>
</html>