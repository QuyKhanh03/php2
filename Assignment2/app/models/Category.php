<?php 
namespace App\Models;
class Category extends BaseModel {
    protected $category = "categories";
    public function getCategories() { 
        $sql = "SELECT * FROM $this->category";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getCategory($id) {
        $sql = "SELECT * FROM $this->category WHERE cate_id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));  
    }
    public function updateCategory($name,$id) {
        $sql = "UPDATE $this->category SET name=? WHERE cate_id=?";
        $this->setQuery($sql);
        return $this->execute(array($name, $id));
    }
    public function deleteCategory($id) {
        $sql = "DELETE FROM $this->category WHERE cate_id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function insertCategory($name){
        $sql = "INSERT INTO $this->category(name) VALUES('$name')";
        $this->setQuery($sql);
        return $this->execute();
    }
}