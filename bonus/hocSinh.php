<?php
class hocSinh
{
    //tên ,năm sinh, địa chỉ,điểm toán,điểm lý ,điểm hóa 
    public $ten;
    public $namSinh;
    public $diaChi;
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    //setTen 
    public function setTen($ten)
    {
        $this->ten = $ten;
    }
    //setNamSinh 
    public function setNamSinh($namSinh)
    {
        $this->namSinh = $namSinh;
    }
    //setDiaChi 
    public function setDiaChi($diaChi)
    {
        $this->diaChi = $diaChi;
    }
    //setDiemToan 
    public function setDiemToan($diemToan)
    {
        $this->diemToan = $diemToan;
    }
    //setDiemLy
    public function setDiemLy($diemLy)
    {
        $this->diemLy = $diemLy;
    }
    //setDiemHoa
    public function setDiemHoa($diemHoa)
    {
        $this->diemHoa = $diemHoa;
    }
    //getTen
    public function getTen()
    {
        return $this->ten;
    }
    //getNamSinh
    public function getNamSinh()
    {
        return $this->namSinh;
    }
    //getDiaChi
    public function getDiaChi()
    {
        return $this->diaChi;
    }
    //getDiemToan
    public function getDiemToan()
    {
        return $this->diemToan;
    }
    //getDiemLy
    public function getDiemLy()
    {
        return $this->diemLy;
    }
    //getDiemHoa
    public function getDiemHoa()
    {
        return $this->diemHoa;
    }
    // tinh tuoi
    public function tinhTuoi()
    {
        return date("Y") - $this->namSinh;
    }
    //tinhdtb
    public function tinhDtb()
    {
        return (($this->diemToan + $this->diemLy + $this->diemHoa) / 3);
    }

    //xeploai
    public function xepLoai($dtb)
    {
        if ($dtb < 4) {
            return "Yếu";
        } elseif ($dtb >= 4 && $dtb < 6) {
            return "Trung bình";
        } elseif ($dtb >= 6 && $dtb < 8) {
            return "Khá";
        } elseif ($dtb >= 8 && $dtb <= 10) {
            return "Giỏi";
        }
    }

    //hienThi 
    public function hienThi()
    {
        echo "Tên : " . $this->ten . " - Tuổi :" . $this->tinhTuoi()
            . " - Xếp loại : " . $this->xepLoai($this->tinhDtb())
            . " - Điểm trung bình : " . $this->tinhDtb();
    }
}
$hocSinhA = new hocSinh();
$hocSinhA->setTen("Phạm Ngọc Khánh");
$hocSinhA->setNamSinh(2003);
$hocSinhA->setDiaChi("Thái Bình");
$hocSinhA->setDiemToan(7);
$hocSinhA->setDiemLy(8);
$hocSinhA->setDiemHoa(9);


$hocSinhA->hienThi();

