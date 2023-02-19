<?php 
namespace App\Models;
class Discount extends BaseModel {
    protected $discount = "code_discounts";
    protected $product = "products";
    public function getDiscounts(){
        $sql = "SELECT * FROM $this->discount 
        join $this->product on $this->product.id = $this->discount.product_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getProduct() {
        $sql = "SELECT * FROM $this->product";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insertDiscount($product_id, $discount_amount,$start_date,$end_date){
    
        $sql = "INSERT INTO $this->discount (product_id,discount_amount,start_date,end_date) VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($product_id,$discount_amount,$start_date,$end_date));
    }
    public function deleteDiscount($discount_id) {
        $sql = "DELETE FROM $this->discount where discount_id =?";
        $this->setQuery($sql);
        return $this->execute(array($discount_id));
    }
}