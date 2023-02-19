<?php 
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{
    public $product;
    public function __construct()
    {
        $this->product = new Product();

    }
    public function index() {
        $title = "hello world";

       $products = $this->product->getProducts();
       $this->render("product.index",compact('products','title'));

    }
    public function addProduct() {
        

        $this->render("product.add");
    }
    public function productPost() {
        if(isset($_POST["submit"])) {
            $err = [];
            $name_product = $_POST["name_product"];
            $price = $_POST["price"];
            if(empty($name_product)){
                $err["name_product"] = "Please enter product name";
            }
            if(empty($price)){
                $err["price"] = "Please enter product price";
            }
            if(count($err)>0){
                $_SESSION["error"] = $err;
                header("location:".url('add-product')); 
                die();
            }else {
                $this->product->insertProduct($name_product,$price);
                header("location:".url('product')); 
            }
        }
    }
}