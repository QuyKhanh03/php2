<?php 
namespace App\Controllers;
use App\Models\Home;
class HomeController extends BaseController {
    public $home;
    public function __construct() {
        $this->home = new Home();

    }
    public function index() {
        $title = "Home";
        $list = $this->home->getAll();
        $this->render("home.index",compact('list','title'));
    }
}