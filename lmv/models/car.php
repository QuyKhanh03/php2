<?php 
include "models/database.php";
class m_car extends database{
    public function read_car() {
        $sql = "select * from cars join brands on brands.id = cars.origin ";
        $this->setQuery($sql);
        return $this->loadAllRows();
        
    }
    public function read_car_by_id($id) {
        $sql = "select * from cars where id_car = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function read_brand() {
        $sql = "select * from brands";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function delete_car_by_id($id) {
        $sql = "delete from cars where id_car = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function insert_car($name,$image,$price,$des,$version,$gear,$origin) {
        $sql = "insert into cars(car_name,image,price,description,version,gear,origin)
        values (?,?,?,?,?,?,?) ";
        $this->setQuery($sql);
        return $this->execute(array($name,$image,$price,$des,$version,$gear,$origin));
    }
    public function update_car($name,$image,$price,$des,$version,$gear,$origin,$id) {
        $sql = "update cars 
        set car_name = ?,image = ?,price = ?,description = ?,version = ?,gear = ?, origin = ?
        where
        id_car = ?";
        $this->setQuery($sql);
        return $this->execute(array($name,$image,$price,$des,$version,$gear,$origin,$id));
    }
}
