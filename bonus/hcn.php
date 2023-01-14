<?php 
class HCN {
    public $cd;
    public $cr;

    public function __construct($cd, $cr) {
        $this->cd = $cd;
        $this->cr = $cr;
    }
    public function dienTich() {
        return $this->cd * $this->cr;
    }
    public function chuVi() {
        return ($this->cd+$this->cr)*2;
    }

}

$hcn = new HCN(2, 3);

echo " Diện tích hình chữ nhật : ". $hcn->dienTich();
echo "<br> Chu vi hình chữ nhật : ". $hcn->chuVi();
?>