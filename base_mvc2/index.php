<?php 
require "vendor/autoload.php";
require "env.php";
require "common/route.php";
use App\Controllers\ProductController;
$ProductController = new ProductController();
$ProductController->index();
