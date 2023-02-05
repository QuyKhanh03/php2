<?php
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case "/":
        include_once "controllers/HomeController.php";
        $home = new HomeController();
        $home->index();
        break;
        //users
    case "table-users":
        include_once "controllers/UsersController.php";
        $tableUsers = new UsersController();
        $tableUsers->index();
        break;
    case "delete-user":
        include_once "controllers/UsersController.php";
        $remove_user = new UsersController();
        $remove_user->remove_user();
        break;
        //discounts
    case "table-discounts":
        include_once "controllers/DiscountsController.php";
        $tableDiscounts = new DiscountsController();
        $tableDiscounts->index();
        break;
    case "create-discount":
        include_once "controllers/DiscountsController.php";
        $createDiscount = new DiscountsController();
        $createDiscount->create_discount();
        break;
    case "delete-discount":
        include_once "controllers/UsersController.php";
        $remove_discount = new DiscountsController();
        $remove_discount->remove_discount();
        break;
        //products
    case "table-products":
        include_once "controllers/ProductController.php";
        $tableProducts = new ProductController();
        $tableProducts->index();
        //categories
    case "table-categories":
        include_once "controllers/CategoriesController.php";
        $tableCategories = new CategoriesController();
        $tableCategories->index();
        break;
    case "form-category":
        include_once "controllers/CategoriesController.php";
        $insert_category = new CategoriesController();
        $insert_category->create_category();
        break;
        //comments


}
