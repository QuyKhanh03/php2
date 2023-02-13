<?php 
namespace App\Models;
class Product extends BaseModel{
    protected $table = 'products';
    public function getProduct() {
        $query = "SELECT * FROM $this->table";
        $this->setQuery($query);
        return $this->loadAllRows();
    }
}