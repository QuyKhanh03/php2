<?php 
include "models/DiscountsModels.php";
class DiscountsController {
    public function index() {
        $DiscountModels = new Discounts\DiscountsModel();
        $listDiscounts = $DiscountModels->read_all_discounts();
        $view = "views/tables/v_table_discounts.php";
        include "templates/displays/layout.php";
    }
    public function remove_discount() {
        $DiscountModels = new Discounts\DiscountsModel();
        $DiscountModels->delete_discount();
        header("location:?url=table-discounts");
    }
    public function create_discount() {
        $DiscountModels = new Discounts\DiscountsModel();
        $rows = $DiscountModels->get_products();
        if(isset($_POST["submit"])) {
            $choose = $_POST["choose"];
            $discount_amount = $_POST["discount_amount"];
            $start_date = $_POST["start_date"];
            $end_date = $_POST["end_date"];
            $DiscountModels->insert_discount($choose, $discount_amount, $start_date, $end_date);
            header("location:?url=table-discounts");
        }
        $view = "views/forms/v_form_addDiscount.php";
        include "templates/displays/layout.php";
    }
}