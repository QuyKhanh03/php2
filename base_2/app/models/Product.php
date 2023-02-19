<?php 
namespace App\Models;
class Product extends BaseModel {
    protected $table = 'products';
    public function getProducts() {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}