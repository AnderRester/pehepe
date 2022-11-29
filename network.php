<?php
session_start();
require_once "./backend/system/controllers/AllInOne.php";

$str = "0";

$allInOne = new Network();
$allInOne->run();

$result = $_POST['result'] ?? '0';

include_once "./frontend/views/layouts/network_layout.php";
