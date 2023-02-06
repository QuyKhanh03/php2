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
        $id = $_GET['id_product'];
        $sql = "SELECT * FROM products where id = $id";
        return $this->getData($sql,false);
    }
    //get all categories
    public function getAllCategories() {
        $sql = "SELECT * FROM categories ";
        return $this->getData($sql);
    }
    //delete_one_product
    public function delete_one_product() {
        $id = $_GET['id_product'];
        $sql = "DELETE FROM products WHERE id = $id";
        return $this->getData($sql,false);
    }
    public function insert_one_product($name_product,$price,$description,$cate_id) {
        $sql = "INSERT INTO products(name_product,price,description,cate_id) 
        VALUES('$name_product','$price','$description','$cate_id')";
        return $this->getData($sql,false);
    }   
    public function update_one_product($name_product,$price,$description,$cate) {
        $id = $_GET['id_product'];
        $sql = "UPDATE products 
        set name_product='$name_product',price='$price',description='$description',cate_id='$cate' 
        where id = $id";
        return $this->getData($sql,false);
    }
}