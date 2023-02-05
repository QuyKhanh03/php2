<?php 
namespace Discounts;

use database;

include "models/db.php";
class DiscountsModel extends database {
    public function read_all_discounts() {
        $sql = "SELECT * FROM code_discounts join products on products.id = code_discounts.product_id";
        return $this->getData($sql);
    }
    public function delete_discount() {
        $id = $_GET['discount_id'];
        $sql = "DELETE FROM code_discounts WHERE discount_id = $id";
        return $this->getData($sql,false);
    }
    public function insert_discount($product_id,$discount_amount,$start_date,$end_date) {
        $sql = "INSERT INTO code_discounts(product_id,discount_amount,start_date,end_date)
         VALUES($product_id,$discount_amount,$start_date,$end_date)";
         return $this->getData($sql,false);  
    }
    public function update_discount($product_id,$discount_amount,$start_date,$end_date){
        $id = $_GET['discount_id'];
        $sql = "UPDATE code_discounts 
        SET discount_amount = $discount_amount, start_date = $start_date, end_date = $end_date 
        WHERE discount_id = $id ";
        return $this->getData($sql,false);
    }
    public function get_one_discount() {
        $id = $_GET['discount_id'];
        $sql = "SELECT * FROM code_discounts WHERE discount_id = $id";
        return $this->getData($sql,false);
    }
}