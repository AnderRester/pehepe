<?php
session_start();
require_once "./backend/system/controllers/AllInOne.php";

$symbol = '';
$sign = '';
$str = "0";

$_SESSION['str'] = $_SESSION['str'] ?? '0';

$Common = new Common();
$Common->run();

//echo $_SESSION['str'];

include_once "./frontend/views/layouts/layout.php";
