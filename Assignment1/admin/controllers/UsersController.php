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
}