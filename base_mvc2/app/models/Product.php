<?php 
namespace App\Models;
class Product extends BaseModel{
    protected $table = 'products';
    public function getProduct() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}