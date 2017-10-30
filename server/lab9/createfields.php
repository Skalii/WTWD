<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 9</title>
    <script src="../lab7/checkForm.js"></script>
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
<h1>Создание полей таблицы</h1>
<form id="formFields" action="queryexecution.php" method="post">
    <?php
    $quantityFields = $_SESSION["quantityFields"];

    for ($i = 0; $i < $_SESSION["quantityFields"]; $i++) {
        echo "<p>
                Имя поля: <input type='text' name='fieldName[]' placeholder='Введите имя'>
                Тип: <select name='fieldType[]'>
                    <option value='int'>int</option>
                    <option value='float'>float</option>
                    <option value='char'>char</option>
                    <option value='varchar'>varchar</option>
                    <option value='text'>text</option>
                    <option value='date'>date</option>
                </select>
                Длина: <input type='number' name='fieldSize[]' placeholder='0'>
            </p>";
    }
    ?>
    <p><input type="submit" name="submit" value="Создать таблицу"></p>
</form>
</body>
</html>