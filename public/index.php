<?php
require_once '../vendor/autoload.php';

use Anakatis\AnakatisApp;

session_start();
$app = new AnakatisApp();
echo $app->main();