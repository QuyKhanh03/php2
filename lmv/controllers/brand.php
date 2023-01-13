<?php
include "models/brand.php";
class c_brands
{
    public function read_all_brand()
    {
        $m_brand = new m_brand();
        $brands = $m_brand->read_brand();
        $view = "views/v_brands.php";
        include "templates/layout.php";
    }
    public function add_brand()
    {
        $m_brand = new m_brand();
        $name_brand = $_POST["name_brand"];
        $result = $m_brand->insert_brand($name_brand);
        if ($result) {
            header("location:brands.php");
        }
        
        $view = "views/v_brands.php";
        include "templates/layout.php";
    }
}
