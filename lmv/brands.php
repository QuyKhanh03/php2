<?php 
include "controllers/brand.php";
$brands = new c_brands();
$brands->read_all_brand();