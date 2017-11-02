<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 7</title>
    <link rel="stylesheet" href="style.css">
    <script src="../functions/checkForm.js"></script>
    <script src="../functions/display.js"></script>
</head>
<body>
<hr width=345px align='left'>
<div align='left'>
    | <a href="lab7.html">Л.р. №7</a>
    | <a href="../lab8/lab8.php">Л.р. №8</a>
    | <a href="../lab9/lab9.html">Л.р. №9</a>
    | <a href="../lab10/lab10.html">Л.р. №10</a>
    | <a href="../lab11/lab11.php">Л.р. №11</a> |
</div>
<hr width=345px align='left'>
<?php
echo "<p>Добро пожаловать, " . $_POST["name"] . "!</p>" .
    "<p>Ваш Email: " . $_POST["email"] . ".</p>";
?>
<p>
    <span id="span1" onclick="hiding('span2')" title="Нажмите для отображения пароля">Пароль: </span>
    <span id="span2">
    <?php
    echo $_POST["password1"];
    ?>
    </span>
</p>
<?php
echo "<p>Сообщение: " . $_POST["message"] . "</p>";
?>
</body>
</html>