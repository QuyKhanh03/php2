<?php 
namespace App\Models;
class User extends BaseModel {
    protected $user = "users";
    protected $role = "roles";
    public function getUsers() {
        $sql = "SELECT * FROM $this->user where $this->user.id_role = 2";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insertUser($username, $password, $email, $address,$phone,$id_role) {
        $sql = "INSERT INTO $this->user(username,password,email,address,phone,id_role)
        VALUES ('$username','$password','$email','$address','$phone','$id_role')";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function getUser($id) {
        $sql = "SELECT * FROM $this->user WHERE id_user = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function updateUser($username, $password, $email, $address,$phone,$id) {
        $sql = "UPDATE $this->user SET username=?,password=?,email=?,address=?,phone=?
        where id_user = ?";
        $this->setQuery($sql);
        return $this->execute(array($username, $password, $email, $address, $phone, $id));
    }
    public function deleteUser($id) {
        $sql = "DELETE FROM $this->user WHERE id_user = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}