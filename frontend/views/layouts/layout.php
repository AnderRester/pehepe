<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./frontend/css/styles.css">
</head>
<body>
<div class="hull">
    <div class="output">

    </div>
    <div class="buttons">
        <form action="/" method="post">
            <button name="equal">=</button>
        </form>
    </div>
</div>
<?php
require_once "./backend/AllInOne.php";

$symbol = '';
$sign = '';
$str = "33 * 22 / (2+3)";

$allInOne = new AllInOne();
$allInOne->please_do_something($str);
$allInOne->run();
?>
</body>
</html>