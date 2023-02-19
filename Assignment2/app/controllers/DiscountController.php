<?php 
namespace App\Controllers;
use App\Models\Discount;
class DiscountController extends BaseController {

    public $discount;
    public function __construct() {
        $this->discount = new Discount();
    }
    public function index() {
        $discounts = $this->discount->getDiscounts();
        $this->render("discount.index",compact('discounts'));
    }
    public function addDiscount() {
        $product = $this->discount->getProduct();
        $this->render("discount.add",compact('product'));
    }
    public function addDiscountPost() {
        if(isset($_POST["submit"])) {
            $id_product = $_POST["product"];
            $discount_amount = $_POST["discount_amount"];
            $start_date = $_POST["start_date"];
            $end_date = $_POST["end_date"];
            $this->discount->insertDiscount($id_product,$discount_amount,$start_date,$end_date);
            header("location:".url("discount"));
            die();
        }
        
    }
    public function removeDiscount($id) {
        $this->discount->deleteDiscount($id);
        header("location:".url("discount"));
            die();
    }
}