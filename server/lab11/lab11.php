<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 11</title>
    <script src="../functions/display.js"></script>
</head>
<body>
<hr width=345px align='left'>
<div align='left'>
    | <a href="../lab7/lab7.html">Л.р. №7</a>
    | <a href="../lab8/lab8.php">Л.р. №8</a>
    | <a href="../lab9/lab9.html">Л.р. №9</a>
    | <a href="../lab10/lab10.html">Л.р. №10</a>
    | <a href="lab11.php">Л.р. №11</a> |
</div>
<hr width=345px align='left'>
<?php
$mysqli = new mysqli("localhost", "id3409735_dimooooon", "pass129049000", "id3409735_wtwd");

function sortRecord($field)
{
    $mysqli = $GLOBALS['mysqli'];
    if (!$mysqli->connect_error) {

        $result = $GLOBALS['mysqli']->query("SELECT * FROM my_music ORDER BY " . $field . ($field == 'date_asq' ? 'DESC' : 'ASC'));

        if (!$GLOBALS['mysqli']->errno) {

            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

                $print = "<p>
                          <strong>" . $row['title'] . "</strong> ("
                    . $row['artist_fn'] . ($row['artist_ln'] ? (" " . $row['artist_ln']) : "") . ")";

                if ($row['my_notes'])
                    $print .= "<br>" . $row['my_notes'];

                $print .= "<br>(Формат: " . $row['format'];

                if ($row['rec_label'])
                    $print .= "; Студия: " . $row['rec_label'];
                if ($row['date_asq'] && ($row['date_asq'] != '0000-00-00'))
                    $print .= "; Приобретено: " . $row['date_asq'];

                echo $print . ")";
            }

        } else echo "<br>Ошибка (" . $mysqli->errno . ")" . $mysqli->error;

    } else die("Не удалось подлючиться. (" . $mysqli->connect_errno . ")" . $mysqli->connect_error);
}

?>
<h1>Мое меню</h1>
<p><strong">Моя музыка</strong></p>
<strong>Упорядочить по:</strong>
<ul>
    <li><a href="javascript: hiding('id')">ID</a>
        <span id="id" style="display: none">
            <?php
            sortRecord('id');
            ?>
        </span>
    </li>
    <li><a href="javascript: hiding('date_asq')">Дате</a>
        <span id="date_asq" style="display: none">
            <?php
            sortRecord('date_asq')
            ?>
        </span>
    </li>
    <li><a href="javascript: hiding('title')">Названию</a>
        <span id="title" style="display: none">
            <?php
            sortRecord('title');
            ?>
        </span>
    </li>
    <li><a href="javascript: hiding('artist_fn')">Имени</a>
        <span id="artist_fn" style="display: none">
            <?php
            sortRecord('artist_fn');
            ?>
        </span>
    </li>
</ul>
</body>
</html>