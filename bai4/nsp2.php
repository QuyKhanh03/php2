<?php 
namespace NSP2;
class SinhVien {
    public $ten ;
    public $namSinh ;
    public function __construct($ten, $namSinh)
    {
        $this->ten = $ten;
        $this->namSinh = $namSinh;
    }
    public function HienThiTTSV() {
        echo "Tên : " .$this->ten ;
        echo "<br>";
        echo "Tuổi : " .$this->namSinh;
    }
}

