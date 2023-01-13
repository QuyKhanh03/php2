<?php 
include "models/database.php";
class m_brand extends database {
    public function read_brand() { 
        $sql = "select * from brands";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insert_brand($name) { 
        $sql = "insert into brands(name_brand) values(?)";
        $this->setQuery($sql);
        return $this->execute(array($name));
    }
    public function delete_brand_by_id($id) {
        $sql = "delete brands where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function update_brand_by_id($name,$id) {
        $sql = "update brands set name_brand = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name,$id));
    }
}