<?php 
class ToanHoc {
    // tinhTong 
    public function tinhTong($a,$b) {
        return $a+$b;
    }
    //tinhHieu
    public function tinhHieu($a,$b) {
        return $a-$b;
    }
    //tinhTich 
    public function tinhTich($a,$b) {
        return $a*$b;
    }
    public function tinhThuong($a,$b) {
        return $a/$b;
    }
    public function muCuaHaiSo($a,$b) {
        
    }

}
$test = new ToanHoc();
