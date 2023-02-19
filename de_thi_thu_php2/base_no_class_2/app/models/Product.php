<?php
require_once 'app/models/BaseModel.php';
function getListProduct() {
    $sql = "select * from product";
    return loadAllRows([],$sql);
}
?>