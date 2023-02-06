<?php

use ModelsCategories\CategoriesModels;

include "models/CategoriesModels.php";
class CategoriesController
{
    public function index()
    {
        $CategoriesModels = new ModelsCategories\CategoriesModels();
        $listCategories = $CategoriesModels->read_all_categories();
        $view = "views/tables/v_table_categories.php";
        include "templates/displays/layout.php";
    }
    public function create_category()
    {
        $CategoriesModels = new ModelsCategories\CategoriesModels();
        if (isset($_POST["submit"])) {
            $name = $_POST["name_category"];
            $CategoriesModels->insert_category($name);
            header("location:?url=table-categories");
        } else {
            // echo "<script>alert('error11')</script>";
        }
        $view = "views/forms/v_form_addCategory.php";
        include "templates/displays/layout.php";
    }
    public function remove_category() {
        $CateModels = new ModelsCategories\CategoriesModels();
        $CateModels->delete_category();
        header("location: ?url=table-categories");
    }
    //edit_category
    
    public function edit_category()
    {
        $CateModels = new ModelsCategories\CategoriesModels();
        $rows = $CateModels->get_one_category();
        if(isset($_POST["submit"])){
            $name = $_POST["name_category"];
            $CateModels->update_category($name);
            header("location:?url=table-categories");
        }
        $view = "views/forms/v_form_editCategory.php";
        include "templates/displays/layout.php";
    }
    
}
