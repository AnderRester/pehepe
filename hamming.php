<?php
session_start();
require_once "./backend/system/controllers/AllInOne.php";

$symbol = '';
$sign = '';
$str = "0";

$_SESSION['str'] = $_SESSION['str'] ?? '0';

$allInOne = new Hammming();
$allInOne->run();

//echo $_SESSION['str'];

include_once "./frontend/views/layouts/hamming_layout.php";
