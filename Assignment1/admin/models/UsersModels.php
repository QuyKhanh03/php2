<?php
namespace Models;
use database;
require_once "models/db.php";
class UsersModel extends database {
    //read all users

    public function read_all_users() {
        $sql = "SELECT * FROM users where id_role =2";
        return $this->getData($sql);
    }
    // insert a new user
    public function create_user($username, $password, $email,$address,$phone,$id_role) {
        $sql = "INSERT INTO users (username, password, email, address, phone, id_role)
                values ('$username','$password','$email','$address','$phone','$id_role')";
        return $this->getData($sql,false);
    }
    //update a user with id_user

    public function update_user($username, $password, $email,$address,$phone,$id_role) {
        $id_user = $_GET["id_user"];
        $sql = "UPDATE users 
        SET username = '$username', password = '$password',
        email = '$email',address = '$address',phone = '$phone',id_role = '$id_role' WHERE id_user = '$id_user'";
        return $this->getData($sql,false);
    }
    //get_all_roles()
    public function get_all_roles() {
        $sql = "SELECT * FROM roles";
        return $this->getData($sql);
    }
    //delete a user with id_user

    public function delete_user() {
        $id_user = $_GET["id_user"];
        $sql = "DELETE FROM users WHERE id_user = $id_user";
        return $this->getData($sql,false);
    }
    //get_one_user
    public function get_one_user() {
        $id = $_GET["id_user"];
        $sql = "SELECT * FROM users WHERE id_user = $id";
        return $this->getData($sql,false);
    }
}
