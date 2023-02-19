<?php 
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{
    public function __construct(){
        $this->product = new Product();
    }
    public function index() {
        $title= "Hello World";
        $products = $this->product->getProducts();
        $this->render("home.index",compact('products','title'));

    }
}