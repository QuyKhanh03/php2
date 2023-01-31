<?php 
class PTB2 {
    public $a;
    public $b;
    public $c;
    
    public function delta($a, $b, $c) {
        return ($b*$b)-(4*$a*$c);
    }
    public function nghiemPT($a, $b, $c) {
        if($a ==0) {
            if($b == 0) {
                echo " phương trình vô nghiệm ";
            }else {
                echo " phương trình có 1 nghiệm x = " . (-$c/$b);
            }
            return;
        }
        
        $delta = $this->delta($a, $b, $c);
        
        
        
        if($delta > 0) {
            $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
            $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        }elseif($delta == 0) {
            $x1 = (-$b/(2*$a));
            echo "Phương trình có nghiệm kép : x1 = x2 = " .$x1;
        }else {
            echo "Phương trình vô nghiệm";
        }
    }
       
}
$ptb2 = new PTB2();
echo "Delta : " .$ptb2->delta(2,9,3) ."<br>";
echo $ptb2->nghiemPT(2,9,3);

