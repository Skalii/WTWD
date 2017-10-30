<?php
session_start();

$_SESSION["nameTable"] = $_REQUEST["nameTable"];
$_SESSION["quantityFields"] = $_REQUEST["quantityFields"];

header("Location: createfields.php");
exit;