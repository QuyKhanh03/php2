<?php
// class ConNguoi {
//     public $chan;
//     public $tay;
//     public $mat;
//     public $mui;
//     public function an() {
//         echo "ăn bằng mồm";
//     }
//     public function setChan($chan) {
//         $this->chan = $chan;
//     }
//     public function setTay($tay) {
//         $this->tay = $tay;
//     }
// }
// class NguoiLon extends ConNguoi {

//     public $longnach;

//     public function di() {
//         echo "đi bằng".$this->chan."Chân";
//     }
    
//     public function noi() {

//     }
    
// }
// //class con 
// class TreCon extends ConNguoi{
//     public function bo()
//     {
//         echo "trẻ con bò bằng ".$this->tay. " tay và " .$this->chan. " chân" ;
//     }
// }
// $nguoiLon = new NguoiLon();
// $nguoiLon->an();
// $nguoiLon->di();
// $nguoiLon->setTay(2);
// $nguoiLon->setChan(2);
// $treCon = new TreCon();
// $treCon->setTay(2);
// $treCon->setChan(2);

// $treCon->bo();


//định nghĩa 1 class ConNguoi gồm thuộc tính hoten,namsinh,diachi,email,sdt
//tạo phương thức tính tuổi (Có trả về) = năm hiện tại - năm sinh 
//tạo phương thức set cho các thuộc tính trên
//định nghĩa 1 class SinhVien kế thừa từ class ConNguoi và có thêm các 
// thuộc tính Điểm Toán,Điểm Lý,Điểm Hóa
// tạo phương thức tinhdiemTB(Có trả về) = (toán + lý + hóa)/3
// tạo phương thức xếp loại biết nếu điểmTB >=5 là đạt ,điểmTB < 5 là không đạt
//tạo phương thức hiển thị thông tin sv gồm:
// hoten,namsinh,diachi,email,sdt,điểmTB,xếp loại
//định nghĩa 1 class GiangVien kế thừa từ class ConNguoi và có thêm các thuộc
//tính  lươngcb,số giờ dạy 
//tạo phương thức tổng lương  = lương cb * số giờ dạy  (Có trả về)
// tạo phương thức hiển thị thông tin Giảng viên gồm:
//hoten,namsinh,diachi,email,sdt,tổng lương

class ConNguoi {
    public $hoTen;
    public $namSinh;
    public $diaChi;
    public $email;
    public $sdt;
    public function tinhTuoi($namSinh) {
        return date("Y") - $namSinh;
    }
    public function setHoTen($hoTen) {
        $this->hoTen = $hoTen;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh= $namSinh;
    }
    public function setDiaChi($diaChi) {
        $this->diaChi= $diaChi;

    }
    public function setEmail($email) {
        $this->email = $email;

    }
    public function setSdt($sdt) {
        $this->sdt = $sdt;
    }
}
class SinhVien extends ConNguoi {
    public $Toan;
    public $Ly;
    public $Hoa;
    //constructor function
    public function __construct ($Toan, $Ly, $Hoa) {
        $this->Toan = $Toan;
        $this->Ly = $Ly;
        $this->Hoa = $Hoa;
    }
    public function tinhDiemTB() {
        return ($this->Toan + $this->Ly + $this->Hoa )/3;
    }
    public function xepLoai($dtb) {
        if($dtb >=5) {
            return "đạt";
        }elseif($dtb < 5) {
            return "không đạt";
        }
    }
    public function HienThiTTSV() {
        // hoten,namsinh,diachi,email,sdt,điểmTB,xếp loại
        echo "Họ tên : " .$this->hoTen . " tuổi : " .$this->tinhTuoi($this->namSinh)
         ." địa chỉ : " .$this->diaChi . " email : ".$this->email ." SĐT : " .$this->sdt
        . " điểm trung bình : " .$this->tinhDiemTB() ." xếp loại : " .$this->xepLoai($this->tinhDiemTB()) ;
    }
    
}

class GiangVien extends ConNguoi {
    public $luongcb;
    public $soGioDay;
    //constructor 
    public function __construct($luongcb,$soGioDay) {
        $this->luongcb = $luongcb;
        $this->soGioDay = $soGioDay;
    }
    public function TongLuong(){
        return $this->luongcb * $this->soGioDay;
    }
    //hoten,namsinh,diachi,email,sdt,tổng lương
    public function HienThiTTGV() {
        echo "Họ tên : " .$this->hoTen ." tuổi : ".$this->tinhTuoi($this->namSinh)
         ." địa chỉ : " .$this->diaChi." email : ".$this->email ." SĐT : " .$this->sdt ." tổng lương : ".$this->TongLuong();
    }
}
$sinhVien = new SinhVien(7,8,9);
$sinhVien->setHoTen("Phạm Ngọc Khánh");
$sinhVien->setNamSinh(2003);
$sinhVien->setDiaChi("Thái Bình");
$sinhVien->setEmail("hello@gmail.com");
$sinhVien->setSdt("190289373817387");
$sinhVien->HienThiTTSV(); 
echo "<br>";
$giangVien = new GiangVien(10000,12);
$giangVien->setHoTen("Nguyễn Văn A");
$giangVien->setNamSinh(1990);
$giangVien->setDiaChi("Hà Nội");
$giangVien->setEmail("gv@gmail.com");
$giangVien->setSdt("8382y98282888");
$giangVien->HienThiTTGV();

