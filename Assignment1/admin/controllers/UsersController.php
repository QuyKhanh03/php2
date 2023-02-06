<?php 
include "models/UsersModels.php";
class UsersController {
    public function index() {
        
        $UsersModels = new Models\UsersModel();
        $listUsers = $UsersModels->read_all_users();
        $view = "views/tables/v_table_users.php";
        include "templates/displays/layout.php";
    }
    public function remove_user() {
        $UsersModels = new Models\UsersModel();
        $UsersModels->delete_user();
        header("location: ?url=table-users");
    }
    public function create_user() {
        $UsersModels = new Models\UsersModel();
        
        if(isset($_POST["submit"])) { 
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];   
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $id_role = $_POST["id_role"];
            $UsersModels->create_user($username, md5($password), $email, $address, $phone, $id_role);
            header("location: ?url=table-users");
        }
        $view = "views/forms/v_form_addUser.php";
        include "templates/displays/layout.php";
    }

    public function edit_user() {
        $UsersModels = new Models\UsersModel();
        $results = $UsersModels->get_one_user();
        if(isset($_POST["submit"])) { 
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];   
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $id_role = $_POST["id_role"];
            $UsersModels->update_user($username, md5($password), $email, $address, $phone, $id_role);
            header("location: ?url=table-users");
        }
        $view = "views/forms/v_form_editUser.php";
        include "templates/displays/layout.php";
    }

}