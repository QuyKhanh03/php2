<?php 
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public $product;
    public function __construct() {
        $this->product = new Product();
    }
    public function index() {
        $title = " titles";
        $products = $this->product->getProducts();
        $this->render("product.index",compact("products","title"));

    }
}