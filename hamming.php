<?php
session_start();
require_once "./backend/system/controllers/AllInOne.php";

$str = "0";

$allInOne = new Hamming();
$allInOne->run();

$result = $_POST['result'] ?? '0';


//echo $_SESSION['str'];

include_once "./frontend/views/layouts/hamming_layout.php";
