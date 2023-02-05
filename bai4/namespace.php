<?php 
include_once "nsp1.php";
include_once "nsp2.php";
$sv = new NSP1\SinhVien("Khánh",20);
$sv ->HienThiTTSV();
$sv1 = new NSP2\SinhVien("Khánh",20);
$sv1->HienThiTTSV();