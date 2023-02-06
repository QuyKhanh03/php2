<?php 
include "models/ProductsModels.php";
class ProductController {
    public function index() {
        $ProductsModels = new ProductModels\ProductsModels();
        $listProducts = $ProductsModels->read_all_products();
        $view = "views/tables/v_table_products.php";
        include "templates/displays/layout.php";
    }
    public function createProduct() {
        $ProductsModels = new ProductModels\ProductsModels();
        $categories = $ProductsModels->getAllCategories();
        if(isset($_POST["submit"])){
            $name_product = $_POST["name_product"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $cate_id = $_POST["cate_id"];
            $ProductsModels->insert_one_product($name_product,$price,$description,$cate_id);
            header("location:?url=table-products");
        }
        $view = "views/forms/v_form_addProduct.php";
        include "templates/displays/layout.php";
    }
    public function editProduct() {
        $ProductsModels = new ProductModels\ProductsModels();
        $categories = $ProductsModels->getAllCategories();
        $rows = $ProductsModels->get_one_product();
        if(isset($_POST["submit"])){
            $name_product = $_POST["name_product"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $cate_id = $_POST["cate_id"];
            $ProductsModels->update_one_product($name_product,$price,$description,$cate_id);
            header("location:?url=table-products");

        }
        $view = "views/forms/v_form_editProduct.php";
        include "templates/displays/layout.php";
    }
    public function deleteProduct() {
        $ProductsModels = new ProductModels\ProductsModels(); 
        $ProductsModels->delete_one_product();
        header("location:?url=table-products");
    }
}