<?php 
namespace App\Models;
class Product extends BaseModel { 
    // tạo ra các thuộc tính 
    protected  $product = "products";
    protected $category = "categories";
    public function getProducts () {
        $sql = " SELECT * FROM $this->product 
        JOIN $this->category ON $this->product.cate_id = $this->category.cate_id ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getProduct($id) {
        $sql = " SELECT * FROM $this->product where id = ? ";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function getCategory () {
        $sql = " SELECT * FROM $this->category ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insertProduct($name_product,$price,$description,$category) {
        $sql = "INSERT INTO $this->product (name_product,price,description,cate_id)
        VALUES ('$name_product','$price','$description','$category')";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function updateProduct($id,$name_product,$price,$description,$category) {
        $sql = "UPDATE $this->product 
        SET name_product=?,price=?,description=?,cate_id=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($name_product,$price,$description,$category,$id));
    }
    public function deleteProduct($id) {
        $sql = "DELETE FROM $this->product WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}