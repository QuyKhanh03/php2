<?php 
class User {
    public $id;
    public $username;
    public $email;
    
    function setId($id) {
        $this->id = $id;
    }
    function setUsername($username) {
        $this->username = $username;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function getInfomation() {
        echo "Mã sinh viên :" . $this->id. ' Tên sinh viên : '. $this->username. ' email : '. $this->email;
    }

    
}

$user = new User();
$user->setId(1);
$user->setUsername('Phạm Ngọc Khánh');
$user->setEmail('phamngockhanh@gmail.com');
$user->getInfomation();