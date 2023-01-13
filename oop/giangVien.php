<?php
class giangVien {
    public $id;
    public  $ten;
    public $nam_sinh;
    public $luong_cb;
    public $so_gio_day;
    //setId
    public function setId($id){
        $this->id=$id;
    }
    //setTen
    public function setTen($ten){
        $this->ten=$ten;
    }
    //setNamSinh
    public function setNamSinh($nam_sinh){
        $this->nam_sinh=$nam_sinh;
    }
    //setLuongCb
    public function setLuongCb($luong_cb){
        $this->luong_cb=$luong_cb;
    }
    //setSoGioDay
    public function setSoGioDay($so_gio_day){
        $this->so_gio_day=$so_gio_day;
    }
    //hamTinhTuoi
    public function tinhTuoi() {
        return date("Y") - $this->nam_sinh;
    }
    //hamtinhLuong
    public function luong() {
        return $this->luong_cb * $this->so_gio_day;
    }
    //xepLoai
    public function xepLoai($luong) {
        if($luong >=5000) {
            return "đạt";  
        }else{
           return "không đạt";
        }
    }
    // lấy ra thông tin giảng viên
    public function thongTinGV() {
        echo "Id : ". $this->id . " - tên : " . $this->ten . " - tuổi : " .$this->tinhTuoi(). " - lương : " . $this->luong() . " - xếp loại : " . $this->xepLoai($this->luong());

    }
}
//khởi tạo gv1;
$gv1 = new giangVien();
$gv1->setId("gv001");
$gv1->setTen(" Nguyễn Văn A ");
$gv1->setNamSinh(1996);
$gv1->setLuongCb(5000);
$gv1->setSoGioDay(10);
$gv1->thongTinGV();

//khởi tạo gv2;

$gv2 = new giangVien();
echo "<br/>";
$gv2->setId("gv002");
$gv2->setTen(" Phạm Thị C ");
$gv2->setNamSinh(1998);
$gv2->setLuongCb(300);
$gv2->setSoGioDay(3);
$gv2->thongTinGV();
echo "<br/>";














