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

        $view = "views/forms/v_form_addDiscount.php";
        include "templates/displays/layout.php";
    }
}