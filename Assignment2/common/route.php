<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector(); 

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

//khu vu can` quan tam start
// bắt đầu định nghĩa ra các đường dẫn
// $router->get('/', function(){
//     return "trang chủ";
// });

//home page
$router->get("/",[App\Controllers\HomeController::class, 'index']);
//list products page
$router->get("product",[App\Controllers\ProductController::class , "index"]);
//form add product
$router->get("add-product",[App\Controllers\ProductController::class, "add"]);
$router->post("add-product-post",[App\Controllers\ProductController::class, "addPost"]);
$router->get("edit-product/{id}",[App\Controllers\ProductController::class, "editProduct"]);
$router->post("edit-product-post/{id}",[App\Controllers\ProductController::class, "editProductPost"]);
$router->get("delete-product/{id}",[App\Controllers\ProductController::class, "removeProduct"]);
//list user page
$router->get("user",[App\Controllers\UserController::class, "index"]);
//form add user
$router->get("add-user",[App\Controllers\UserController::class, "add"]);
$router->post("add-user-post",[App\Controllers\UserController::class, "addUser"]);
//edit
$router->get("edit-user/{id}",[App\Controllers\UserController::class, "editUser"]);
$router->post("edit-user-post/{id}",[App\Controllers\UserController::class, "editUserPost"]);
$router->get("delete-user/{id}",[App\Controllers\UserController::class, "removeUser"]);

//list categories page

$router->get("category",[App\Controllers\CategoryController::class, "index"]);
$router->get("add-category",[App\Controllers\CategoryController::class, "addCategory"]);
$router->post("add-category-post",[App\Controllers\CategoryController::class, "addCategoryPost"]);
$router->get("edit-category/{id}",[App\Controllers\CategoryController::class, "editCategory"]);
$router->post("edit-category-post/{id}",[App\Controllers\CategoryController::class, "editCategoryPost"]);
$router->get("delete-category/{id}",[App\Controllers\CategoryController::class, "removeCategory"]);
//list comments page
$router->get("comment",[App\Controllers\CommentController::class, "index"]);
$router->get("delete-comment/{id}",[App\Controllers\CommentController::class, "removeComment"]);


//list discounts page
$router->get("discount",[App\Controllers\DiscountController::class, "index"]);
$router->get("add-discount",[App\Controllers\DiscountController::class, "addDiscount"]);
$router->post("add-discount-post",[App\Controllers\DiscountController::class, "addDiscountPost"]);
$router->get("delete-discount/{id}",[App\Controllers\DiscountController::class, "removeDiscount"]);




//end

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>