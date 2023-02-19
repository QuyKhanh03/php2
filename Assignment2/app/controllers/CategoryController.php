<?php

namespace App\Controllers;

use App\Models\Category;

class CategoryController extends BaseController
{
    public $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        $categories = $this->category->getCategories();
        $this->render("category.index", compact('categories'));
    }
    public function removeCategory($id)
    {
        $this->category->deleteCategory($id);
        header("location:" . url("category"));
    }
    public function addCategory()
    {
        $this->render("category.add");
    }
    public function addCategoryPost()
    {
        if (isset($_POST["submit"])) {
            $errors = [];
            $name = $_POST["name"];
            if (empty($name)) {
                $errors["name"] = "enter category name";
            }
            if (count($errors)>0) {
                // redirect("errors","$errors","add-category");
                $_SESSION["errors"] = $errors;
                header("location". url("add-category"));
                die();
            } else { 
                $this->category->insertCategory($name);
                redirect("success","create success !!!","add-category");
            }
        }
    }
    public function editCategory($id)
    {
        // echo $id;
        $category = $this->category->getCategory($id);
        $this->render("category.edit", compact("category"));
    }

    public function editCategoryPost($id)
    {
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $this->category->updateCategory($name,$id);
            redirect("success", "update success!!!", "category");
        }
    }
}
