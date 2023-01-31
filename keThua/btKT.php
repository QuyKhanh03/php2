<?php 
class Person {
    public $name;
    public $gender;
    public $address;
    public $birthday;

}
class Student extends Person {
    public $maSV;
    public $dtb;
    public $email;
    public function nhapTT($name, $gender, $address, $birthday,$maSV,$dtb,$email) {
        $this->name = $name;
        $this->gender = $gender;
        $this->address = $address;
        $this->birthday = $birthday;
        $this->maSV = $maSV;
        $this->dtb = $dtb;
        $this->email = $email;
    }
    public function hienThiTT() {
        echo "Tên : " .$this->name . ", giới tính : " .$this->gender .", quê quán : " .$this->address 
        . ", ngày sinh : " .$this->birthday .", điểm trung bình : " .$this->dtb .", email : " .$this->email ;

        
    }

}
$student = new Student();
$student->nhapTT("Khánh","nam","Thái Bình",2003,"Ph23703",8,"abc@gmail.com");
$student->hienThiTT();

//450 + 90 + 70 (400 thiếu)