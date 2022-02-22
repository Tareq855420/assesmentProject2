<?php

session_start();

echo session_id();

require_once 'vendor/autoload.php';

use App\classes\Home;

$home = new Home();
$home->index();