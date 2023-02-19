<?php 
namespace App\Models;
class Product extends BaseModel{
    protected $table = "products";
    protected $category = "categories";
    public function getProducts() {
        $sql = "select * from $this->table 
        join $this->category on $this->table.cate_id = $this->category.cate_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insertProduct($name_product,$price) {
        $sql = "insert into $this->table(name_product,price)
         values('$name_product','$price')";
        $this->setQuery($sql);
        return $this->execute(); 
    }
}