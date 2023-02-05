<?php 
//interface k phải là 1 class  nhưng interface lại có phương thức trìu tượng 
interface DiChuyen {
    //định nghĩa phương thức trìu tượng trong interface 
    function chay();
}
class conCho implements DiChuyen  {
    public function chay() {
        echo "con chó chạy bằng 4 chân ";
    }
}
class OtO implements DiChuyen  {
    public function chay() {
        echo "Ô Tô chạy bằng 4 bánh ";
    }
}
$conCho = new conCho();
$conCho->chay();
$oto = new OtO();
$oto->chay();
// interface là bản thiết kế cho các class có cùng phương thức hoạt động 
//con abstract là bản thiết kế cho các class có cùng tính chất với nhau

