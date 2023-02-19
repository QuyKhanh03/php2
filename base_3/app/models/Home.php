<?php 
namespace App\Models;
class Home extends BaseModel {
    public $table = 'products';
    public function getAll() {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

}