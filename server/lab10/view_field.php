<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 10</title>
    <script src="../functions/display.js"></script>
</head>
<body>
<hr width=345px align='left'>
<div align='left'>
    | <a href="../lab7/lab7.html">Л.р. №7</a>
    | <a href="../lab8/lab8.php">Л.р. №8</a>
    | <a href="../lab9/lab9.html">Л.р. №9</a>
    | <a href="lab10.html">Л.р. №10</a>
    | <a href="../lab11/lab11.php">Л.р. №11</a> |
</div>
<hr width=345px align='left'>
<h1>Добавлено поле в таблицу my_music</h1>
<form>
    <p>
        <label>Номер записи: <?php echo $_SESSION['id']; ?></label>
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Формат записи: <?php echo $_SESSION['format']; ?></label>
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Название записи: <?php echo $_SESSION['title']; ?></label>
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Имя артиста: <?php echo $_SESSION['artist_fn']; ?></label>
    </p>
    <hr width="345px" align="left">
    <?php

    if ($_SESSION['artist_lname']) {
        echo "<p>
                  <label>Фамилия артиста: " . $_SESSION['artist_ln'] . "</label>
              </p>
              <hr width='345px' align='left'>";
    }
    if ($_SESSION['rec_label']) {
        echo "<p>
                  <label>Студия звукозаписи: " . $_SESSION['rec_label'] . "</label>
              </p>
              <hr width='345px' align='left'>";
    }
    if ($_SESSION['my_notes']) {
        echo "<p>
                  <label>Моя заметка: " . $_SESSION['my_notes'] . "</label>
              </p>
              <hr width='345px' align='left'>";
    }
    if ($_SESSION['date_asq']) {
        echo "<p>
                  <label>Дата: " . $_SESSION['date_asq'] . "</label>
              </p>
              <hr width='345px' align='left'>";
    }
    ?>
    <input type="button" value="Добавить еще" onclick="redirection('lab10.html')">
</form>
</body>
</html>