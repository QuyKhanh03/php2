<?php 
//create class students
class students {
    public $id;
    public $name;
    
    function __construct()
    {
        
    }
    function setId($id) {
        $this->id = $id;
    }
    function setName($name) {
        $this->name = $name;
    }
    public function getId()
    {   
        return $this->id;
    }
    
    
}
class Teacher extends students
{
    public $age;
    function setAge($age) {
        $this->age = $age;

    }
    function info() {
        echo " id : " . $this->id . " name : " . $this->name . " age : " . $this->age;
    }
    // public static function GetTeachers () {
    //     // $teachers = new Teachers();
    //     $teachers->setId(1);
    //     $teachers->setName("Teachers");
    //     $teachers->setAge(18);
    //     $teachers->info();
    // }

}
// $gv1 = new Teachers();
$gv1->setId(1);
$gv1->setName("John");
$gv1->setAge(30);

$gv1->info();
// $gv2 = Teachers::GetTeachers();
echo $gv2;



//what is class
//class là khuôn mẫu để tạo ra nhiều đối tượng





