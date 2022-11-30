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
<div class="hull network">
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
    <div class="output network">
        <div class="result">
            <?= $result; ?>
        </div>
    </div>
    <div class="buttons">
        <form action="./network.php" class="pAehali" method="post">
            <input type="text" name="str" class="set_hamming">
            <div>
                <button name="clear" class="operation_button">pAehali</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>