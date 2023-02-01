<?php
//định nghĩa class trìu tượng 
//clsss trìu tượng đc gọi là 1 class cho nên nó có đầy đủ  thuộc tính và phương thức nhưng có thêm phườn thức trìu tượng
//class trìu tuwouongj thì k thể khởi tạo đc

// abstract class DongVat{
//     abstract function chay();

// }
// class ConNguoi extends DongVat{
//     public function chay(){

//     }
// }
// class ConCho extends DongVat{
//     public function chay(){
//         echo "con chó chạy bằng 4 chân ";
//     }
// }

// $conCho = new ConCho();
// $conCho->chay();


//XÂY dựng 1 class tính chu vi diện tích hcn 
//xây dựng 1 class tính cv dt hv
//tam giac
//xây dựng trìu tượng và xđ các phương thức trìu tượng cho 3 class trên

abstract class HinhHoc
{
    abstract public function chuVi();
    abstract public function DienTich();
}
class HCN extends HinhHoc
{
    public $a;
    public $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function chuVi()
    {
        echo ($this->a + $this->b) * 2;
    }
    public function DienTich()
    {
        echo $this->a * $this->b;
    }
}
//class  HinhVuong extends HinhHoc
class HinhVuong extends HinhHoc
{
    public $a;
    public function __construct($a)
    {
        $this->a = $a;
    }
    public function chuVi()
    {
        echo $this->a * 4;
    }
    public function DienTich()
    {
        echo $this->a * $this->a;
    }
}
class HinhTamGiac extends HinhHoc
{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c= $c;
    }
    public function chuVi()
    {
        echo $this->a + $this->b + $this->c;
    }
    public function DienTich()
    {
        $s = ($this->a + $this->b + $this->c)/2;
        echo sqrt($s *($s-$this->a)*($s-$this->b)*($s-$this->c));

    }
}
$hcn = new HCN(5, 10);
$hcn->DienTich();
echo "<br>";
$hcn->chuVi();
