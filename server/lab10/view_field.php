<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 10</title>
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
<h1>Добавлено поле в таблицу my_music</h1>
<form action="add_field.php">
    <p>
        <label>Номер записи: <?php echo $_REQUEST['id'] ?></label>
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Формат записи: <?php echo $_REQUEST['format'] ?></label>
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Название записи: <?php echo $_REQUEST['title'] ?></label>
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Имя артиста: <?php echo $_REQUEST['artist_fn'] ?></label>
    </p>
    <hr width="345px" align="left">
    <?php
    if ($_REQUEST['artist_ln']) {
        echo "<p>
                  <label>Фамилия артиста: " . $_REQUEST['artist_ln'] . "</label>
              </p>
              <hr width='345px' align='left'>";
    }
    ?>
    <p>
        <label>Студия звукозаписи: </label>
        <input type="text" name="rec_label" size="15" placeholder="Введите студию">
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Моя заметка: </label>
        <textarea name="rec_label" cols="23" rows="3" placeholder="Введите заметку"></textarea>
    </p>
    <hr width="345px" align="left">
    <p>
        <label>Дата (гггг-мм-дд): </label>
        <input type="date" name="date">
    </p>
    <hr width="345px" align="left">
    <input type="submit" name="submit" value="Добавить еще">
</form>
</body>
</html>