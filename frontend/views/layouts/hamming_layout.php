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
            <a href="/" class="operation_button calculator_options">Common</a>
            <a href="/hamming.php" class="operation_button calculator_options">Hamming</a>
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
        <form action="/hamming.php" class="pAehali" method="post">
            <input type="text" name="str" value="0">
            <select name="" id="">
                <option name="" value="">
                    <span>Lungimea pentru S.I. de N biti</span>
                </option>
                <option name="" value="">
                    <span>Lungimea pentru S.I. de N octeţi</span>
                </option>
                <option name="" value="">
                    <span>Numărul biţilor de control pentru S.I. de N biţi</span>
                </option>
                <option name="" value="">
                    <span>Numărul biţilor de control S.I. de  N octeţi</span>
                </option>
            </select>
            <div>
                <button name="clear" class="operation_button">pAehali</button>
            </div>
        </form>
    </div>
</div>
<script src="./frontend/js/pAehali.js"></script>
</body>
</html>