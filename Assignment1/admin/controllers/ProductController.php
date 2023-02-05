<?php 
include "models/ProductsModels.php";
class ProductController {
    public function index() {
        $ProductsModels = new ProductModels\ProductsModels();
        $listProducts = $ProductsModels->read_all_products();
        $view = "views/tables/v_table_products.php";
        include "templates/displays/layout.php";
    }
}