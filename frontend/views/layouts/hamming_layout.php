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
<div class="hull hamming">
    <div class="calculator_settings">
        <div class="calc_type">
            <a href="./" class="operation_button calculator_options">Common</a>
            <a href="./hamming.php" class="operation_button calculator_options">Hamming</a>
            <a href="./network.php" class="operation_button calculator_options">Network</a>
        </div>
        <div class="load-wrap">
            <div class="load-4">
                <div class="ring-1"></div>
            </div>
        </div>
    </div>
    <div class="output">
        <div class="result">
            <?= $result; ?>
        </div>
    </div>
    <div class="buttons">
        <form action="./hamming.php" class="pAehali" method="post">
            <input type="text" name="str" class="set_hamming">
            <select name="hamming_type">
                <option value="1">
                    <span>Lungimea pentru S.I. de N biti</span>
                </option>
                <option value="2">
                    <span>Lungimea pentru S.I. de N octeţi</span>
                </option>
                <option value="3">
                    <span>Numărul biţilor de control pentru S.I. de N biţi</span>
                </option>
                <option value="4">
                    <span>Numărul biţilor de control S.I. de  N octeţi</span>
                </option>
            </select>
            <div>
                <button name="clear" class="operation_button">pAehali</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>