<?php 
class HomeController {
    public function index() {

        $view = "views/home/v_home.php";
        include "templates/displays/layout.php";
    }
}