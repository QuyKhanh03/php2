<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController
{
    public $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index()
    {
        $users = $this->user->getUsers();
        $this->render("user.index", compact('users'));
    }
    public function add()
    {
        $this->render("user.add");
    }
    public function editUser($id) {
        echo $id;
        $user = $this->user->getUser($id);
         $this->render("user.edit",compact("user"));
    }
    public function editUserPost($id) {
        if(isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $result = $this->user->updateUser($username, $password, $email, $address,$phone,$id);
            if($result) {
                header("location:".url('user'));
                // redirect("success","Edit User Success","edit-user/".$id);
            }
        }
    }
    public function removeUser($id) {
        $this->user->deleteUser($id);
        header("location:".url('user'));
    }
    public function addUser()
    {
        if (isset($_POST["submit"])) {
            $errors = [];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $id_role = $_POST['id_role'];
            if (empty($username)) {
                $errors["username"] = " * enter username";
            }
            if (empty($password)) {
                $errors["password"] = " * enter password";
            }
            if (empty($email)) {
                $errors["email"] = " * enter email";
            }
            if (empty($address)) {
                $errors["address"] = " * enter address";
            }
            if (empty($phone)) {
                $errors["phone"] = " * enter phone";
            }
            if (count($errors) > 0) {
                $_SESSION["errors"] = $errors;
                header("location:" . url("add-user"));
                die();
            }else {
                $this->user->insertUser($username, md5($password), $email, $address, $phone, $id_role);
                // header("location:" . url("user"));
                redirect("success","create success !!!","add-user");
            }
        }
    }
}
