<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController
{
    public $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        $products = $this->product->getProducts();
        $this->render("product.index", compact('products'));
    }
    public function editProduct($id) {
        $categories = $this->product->getCategory();
        $product = $this->product->getProduct($id);
        $this->render("product.edit", compact('product','categories'));
    }
    public function editProductPost($id) {
        if(isset($_POST["submit"])) {
            $name_product = $_POST['name_product'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $category = $_POST["category"];
            $this->product->updateProduct($id,$name_product,$price,$description,$category);
            header("location:".url("product"));
            die();
            
        }
    }
    public function removeProduct($id) {
        $this->product->deleteProduct($id);
        header("location:".url("product"));
        die();
        
    }

    public function add()
    {
        $categories = $this->product->getCategory();
        $this->render("product.add", compact('categories'));
    }
    public function addPost()
    {
        if (isset($_POST["submit"])) {
            $name_product = $_POST['name_product'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $category = $_POST["category"];
            $errors = [];
            if (empty($name_product)) {
                $errors["name_product"] = " * enter product name";
            }
            if (empty($price)) {
                $errors["price"] = " * enter product price";
            }
            if ($price <= 0) {
                $errors["number"] = " * price must be greater than 0";
            }
            if (empty($description)) {
                $errors["description"] = " * enter product description";
            }
            if (count($errors) > 0) {
                // $_SESSION["errors"] = $errors;
                // header("location:" . url("add-product"));
                // die();
                redirect("errors",$errors,"add-product");
            }else {
                $result= $this->product->insertProduct($name_product, $price, $description, $category);
                if($result) {
                    // $_SESSION["success"] = "Success !!!!";
                   redirect("success","Success !!!!","add-product");
                    // header("location:".url("add-product"));die();
                }
            }
        }
    }

}
