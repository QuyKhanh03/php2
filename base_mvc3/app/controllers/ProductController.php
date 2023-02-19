<?php 
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public $product;
    public function __construct() {
        $this->product = new Product();
    }
    public function index() {
        $title = "List Product";
        $products = $this->product->getProduct();
        $this->render("product.index",compact("products","title"));
    }
    public function add() {
        $title = "Add Product";
        $this->render("product.add",compact("title"));

    }
}