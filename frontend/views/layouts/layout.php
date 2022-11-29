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
    <div class="calculator_settings">
        <div class="calc_type">
            <a href="/pehepe/" class="operation_button calculator_options">Common</a>
            <a href="/pehepe/hamming.php" class="operation_button calculator_options">Hamming</a>
            <a href="/pehepe/network.php" class="operation_button calculator_options">Network</a>
        </div>
        <div class="load-wrap">
            <div class="load-4">
                <div class="ring-1"></div>
            </div>
        </div>
    </div>
    <div class="output">
        <div class="result">
            <?= $_SESSION['str']; ?>
        </div>
    </div>
    <div class="buttons">
        <form action="/pehepe/" method="post">
            <input type="hidden" name="str" value="0">
            <div>
                <button name="clear" class="operation_button">AC</button>
                <button name="add_digit" class="operation_button" value="7">7</button>
                <button name="add_digit" class="operation_button" value="4">4</button>
                <button name="add_digit" class="operation_button" value="1">1</button>
                <button name="add_digit" class="operation_button" value="0">0</button>
            </div>
            <div>
                <button name="change_sign" class="operation_button">+/-</button>
                <button name="add_digit" class="operation_button" value="8">8</button>
                <button name="add_digit" class="operation_button" value="5">5</button>
                <button name="add_digit" class="operation_button" value="2">2</button>
                <button name="none" class="operation_button">?</button>
            </div>
            <div>
                <button name="percent" class="operation_button">%</button>
                <button name="add_digit" class="operation_button" value="9">9</button>
                <button name="add_digit" class="operation_button" value="6">6</button>
                <button name="add_digit" class="operation_button" value="3">3</button>
                <button name="add_dot" class="operation_button">,</button>
            </div>
            <div>
                <button name="operation" class="operation_button" value="/">÷</button>
                <button name="operation" class="operation_button" value="*">×</button>
                <button name="operation" class="operation_button" value="-">-</button>
                <button name="operation" class="operation_button" value="+">+</button>
                <button name="equal" class="operation_button">=</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>