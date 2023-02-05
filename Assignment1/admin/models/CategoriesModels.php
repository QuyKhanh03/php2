<?php 
namespace CategoriesModels;

use database;

include "models/db.php";
class CategoriesModels extends database {
    public function read_all_categories() {
        $sql = "SELECT * FROM categories";
        return $this->getData($sql);
    }
    //delete category
    public function delete_category() {
        $id = $_GET['cate_id'];
        $sql = "DELETE FROM categories WHERE cate_id = $id";
        return $this->getData($sql,false);
    }
    // insert category
    public function insert_category($name) {
        $sql = "INSERT INTO categories (`name`) VALUES ('$name')";
        return $this->getData($sql,false);
    }
    // update category
    public function update_category($name) {
        $id = $_GET['cate_id'];
        $sql = "UPDATE categories SET name = '$name' WHERE cate_id = $id";
        return $this->getData($sql,false);
    }

}