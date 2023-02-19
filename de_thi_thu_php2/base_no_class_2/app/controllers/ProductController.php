<?php
include_once 'app/models/Product.php';
include_once 'app/controllers/BaseController.php';
function getProduct() {
    $products = getListProduct();
    return render('product.index',compact('products'));
}