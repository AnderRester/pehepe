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
<?php
include_once "./backend/AllInOne.php";
//require_once "./frontend/components/variables.php";

$symbol = '';
$sign = '';
$str = "0";


$allInOne = new AllInOne();
//$allInOne->calculate($str);
$allInOne->run();
?>
<div class="hull">
    <div class="calculator_settings">
        <div class="calc_type">
            <button name="equal" class="operation_button calculator_options">Common</button>
            <button name="equal" class="operation_button calculator_options">Hamming</button>
        </div>
        <div class="load-wrapp">
            <div class="load-4">
                <div class="ring-1"></div>
            </div>
        </div>
    </div>
    <div class="output">
        <div class="result">
            <?= $str; ?>
        </div>
    </div>
    <div class="buttons1">
        <!--        <form action="/" method="post1">-->
        <!--            <button name="equal" class="operation_button">=</button>-->
        <!--        </form>-->
        <div>
            <button name="equal" class="operation_button">AC</button>
            <button name="equal" class="operation_button">7</button>
            <button name="equal" class="operation_button">4</button>
            <button name="equal" class="operation_button">1</button>
            <button name="equal" class="operation_button">0</button>
        </div>
        <div>
            <button name="equal" class="operation_button">+/-</button>
            <button name="equal" class="operation_button">8</button>
            <button name="equal" class="operation_button">5</button>
            <button name="equal" class="operation_button">2</button>
            <button name="equal" class="operation_button">?</button>
        </div>
        <div>
            <button name="equal" class="operation_button">%</button>
            <button name="equal" class="operation_button">9</button>
            <button name="equal" class="operation_button">6</button>
            <button name="equal" class="operation_button">3</button>
            <button name="equal" class="operation_button">,</button>
        </div>
        <div>
            <button name="equal" class="operation_button">÷</button>
            <button name="equal" class="operation_button">×</button>
            <button name="equal" class="operation_button">-</button>
            <button name="equal" class="operation_button">+</button>
            <button name="equal" class="operation_button">=</button>
        </div>
    </div>
</div>
</body>
</html>