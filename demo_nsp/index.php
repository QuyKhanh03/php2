<?php 
// require "controllers/ProductController.php";
// require "controllers/CategoryController.php";
// require "models/Product.php";
require_once "vendor/autoload.php";
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Models\Product;
$categoryControler = new CategoryController();
$productController = new ProductController();
$product = new Product();