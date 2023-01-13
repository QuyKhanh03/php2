<?php 
class Students {
    //khai thuộc tính (biến)
    public $name;
    public $student_id;
    public $gender;
    public $age;
    public function __construct($name, $student_id, $gender, $age) {
        $this->name=$name;
        $this->student_id = $student_id;
        $this-> gender = $gender;
        $this->age = $age;
        

    }
    //set name
    public function setName($name) {
        $this->name = $name;
    } 
    //set student_id

    // public function setStudentId($student_id) {
    //     $this->student_id = $student_id;
    // }
    //tạo phương thức tính tuổi
    public function TinhTuoi() {
        return date('Y') - $this->age;
    }
    // // set gender
    // public function setGender($gender) {
    //     $this->gender = $gender;
    // }
    // // set age
    // public function setAge($age) {
    //     $this->age = $age;
    // }
    //function showInfo()

    public function showInfo() {
        echo "<br>Name: ".$this->name."<br>Student ID: ".$this->student_id."<br>Gender: ".$this->gender."<br>Age: ".$this->TinhTuoi();
    }

}

$student = new Students("Khánh",1,"nam",2003);
$student->setName("Khánh 1");
// $student->setStudentId(1);
// $student->setGender("Nam");
// $student->setAge(18);


$student->showInfo();

//tạo class GV gồm các thuộc tính : magv tengv nambatdau luongcb sogioday
//tạo hàm khởi tạo cho các thuộc tính trên
//tạo hàm tính thâm niên có trả về = ( năm hiện tại - năm bắt đầu)
//tọa hàm tính tổng lương = lương cb * số giờ dạy
//tọa hàm xếp loại nếu >= 5000 đạt
//tạo hàm hiển thị 
class Teachers {
    public $teacher_id;
    public $name;
    public $start_date;
    public $salary_basic;
    public $time;
    public function __construct($teacher_id, $name, $start_date, $salary_basic , $time) {
        $this->teacher_id = $teacher_id;
        $this->name = $name;
        $this->start_date = $start_date;
        $this->salary_basic = $salary_basic;
        $this->time = $time;
    }
    public function seniority() {
        return date("Y") - $this->start_date;
    }
    public function total_salary() {
        return $this->salary_basic * $this->time;
    }
    public function ranks($rank) {
        if($rank >= 5000) {
            return "reached";
        }else {
        return "not reached";
        }
    }
    public function showInfo() {
        echo "<br>Name: ".$this->name." - Teacher ID: ".$this->teacher_id
        ." - Start Date: ".$this->start_date ." - Seniority: " . $this->seniority() . " years"
        ." - Salary Basic: ".$this->salary_basic. " - Total Salary: ".$this->total_salary()
        ." - Time: ".$this->time . " - Rank: ".$this->ranks($this->total_salary())."<br>";
    }
}
$teacher1 = new Teachers("gv001","Nguyễn Văn A",2014,1000,12);
$teacher1->showInfo();