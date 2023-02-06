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
    case "form-user":
        include_once "controllers/UsersController.php";
        $form_user = new UsersController();
        $form_user->create_user();
        break;
    case "edit-user":
        include_once "controllers/UsersController.php";
        $edit_user = new UsersController();
        $edit_user->edit_user();
        break;
        //discounts
    case "table-discounts":
        include_once "controllers/DiscountsController.php";
        $tableDiscounts = new DiscountsController();
        $tableDiscounts->index();
        break;
    case "form-discount":
        include_once "controllers/DiscountsController.php";
        $createDiscount = new DiscountsController();
        $createDiscount->create_discount();
        break;
    case "delete-discount":
        include_once "controllers/DiscountsController.php";
        $remove_discount = new DiscountsController();
        $remove_discount->remove_discount();
        break;
        
        //products
    case "table-products":
        include_once "controllers/ProductController.php";
        $tableProducts = new ProductController();
        $tableProducts->index();
        break;
    case "form-product":
        include_once "controllers/ProductController.php";
        $formProduct = new ProductController();
        $formProduct->createProduct();
        break;
    case "edit-product":
        include_once "controllers/ProductController.php";
        $formProduct = new ProductController();
        $formProduct->editProduct();
        break;
    case "delete-product":
        include_once "controllers/ProductController.php";
        $remove_product = new ProductController();
        $remove_product->deleteProduct();
        break;
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
    case "delete-category":
        include_once "controllers/CategoriesController.php";
        $remove_category = new CategoriesController();
        $remove_category->remove_category();
        break;
    case "edit-category":
        include_once "controllers/CategoriesController.php";
        $edit_category = new CategoriesController();
        $edit_category->edit_category();
        break;
        //comments
    case "table-comments":
        include_once "controllers/CommentsController.php";
        $comments = new CommentsController();
        $comments->index();
        break;
}
