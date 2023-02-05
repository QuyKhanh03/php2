<?php
class ToanHoc
{
    // tinhTong 
    public function tinhTong($a, $b)
    {
        echo $a + $b;
    }
    //tinhHieu
    public function tinhHieu($a, $b)
    {
        echo $a - $b;
    }
    //tinhTich 
    public function tinhTich($a, $b)
    {
        echo $a * $b;
    }
    public function tinhThuong($a, $b)
    {
        echo $a / $b;
    }
    public function muCuaHaiSo($a, $b)
    {
        echo "a mũ b : " . pow($a, $b);
        echo "b mũ a : " . pow($b, $a);
    }
    public function soChanLe($n)
    {
        if ($n % 2 == 0) {
            echo $n . "là số chẵn";
        } else {
            echo $n . "là số lẻ";
        }
    }
    public function SoNguyenTo($n)
    {
        if ($n <= 1) {
            echo $n . " không phải là số nguyên tố ";
            return false;
        }

        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                echo $n . " không phải là số nguyên tố ";
                return false;
            }
        }
        echo $n . " là số nguyên tố";
        return true;
    }
    public function SoHoanHao($n)
    {
        $sum = 0;
        for ($i = 1; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                $sum += $i;
            }
        }
        if ($sum == $n) {
            echo $n . "  là số hoàn hảo";
            return true;
        }
        echo $n . " không phải là số hoàn hảo ";
        return false;
    }
}
class KiemTraSo extends ToanHoc {
    public function KiemTraSONguyenTo() {
       
    }
}




?>
