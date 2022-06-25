<?php
require_once "Shop.php";
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAB3</title>
    <script src="script.js"></script>
</head>
<body>
<form action="" method="post" id="vendor">
    <input placeholder="Производитель:" type="text" name="vendor">
    <input type="submit"><br>
</form>
<div id="1"></div>
<br>
<form action="" method="post" id="category">
    <input placeholder="Категория:"type="text" name="category">
    <input type="submit"><br>
</form>
<div id="2"></div>
<br>
<form action="" method="post" id="price">
    <input placeholder="Минимальная цена:" type="number" name="minPrice">
    <input placeholder="Максимальная цена:" type="number" name="maxPrice">
    <input type="submit"><br>
</form>
<div id="3"></div>
</body>
</html>

