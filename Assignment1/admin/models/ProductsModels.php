<?php 
namespace ProductModels;

use database;

include "models/db.php";
class ProductsModels extends database {
    public function read_all_products() {
        $sql = "SELECT * FROM products join categories on products.cate_id = categories.cate_id";
        return $this->getData($sql);
    }
    //get_one_product
    public function get_one_product() {
        
    }
    //delete_one_product
    public function delete_one_product() {
    }
    public function insert_one_product($name_product,$price,$description,$cate_id) {
        
    }   
}