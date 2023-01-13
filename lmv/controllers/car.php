<?php
include "models/car.php";

class cars
{
    
    public function index()
    {
        $cars = new m_car();
        $read_car = $cars->read_car();

        $view = "views/v_car.php";
        include "templates/layout.php";
    }
    public function add_car()
    {
        $car = new m_car();
        $categories = $car->read_brand();
        if (isset($_POST["btn"])) {
            $name = $_POST["name"];
            $image = ($_FILES['image']['error'] == 0) ? $_FILES['image']['name'] : "";
            $price = $_POST["price"];
            $description = $_POST["description"];
            $version = $_POST["version"];
            $gear = $_POST["gear"];
            $origin = $_POST["origin"];
            $result = $car->insert_car($name, $image, $price, $description, $version, $gear, $origin);
            if ($result) {
                if ($image != "") {
                    move_uploaded_file($_FILES['image']['tmp_name'], "./images/" . $image);
                }
                header("location:index.php");
            }
        }
        $view = "views/v_addCar.php";
        include "templates/layout.php";
    }
    public function delete_car() {
        $id = $_GET["id"];
        $car = new m_car();
        $result = $car->delete_car_by_id($id);
        if($result) {
            header("location:index.php");
        }
    }
    public function editCar() {
        $id = $_GET["id"];
        $car = new m_car();
        $categories = $car->read_brand();
        $read_car = $car->read_car_by_id($id);
        if(isset($_POST["update"])) {
            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $version = $_POST["version"];
            $gear = $_POST["gear"];
            $origin = $_POST["origin"];
           
            $image = "";
            if($_FILES["image"]['size']>0){
                $new_image = $_FILES["image"];
                $image = ($new_image['error'] == 0 ? $_FILES['image']['name'] : "");
            }else {
                $image = $_POST["image_old"];
            }
            if(isset($image)){
                $result = $car->update_car($name,$image,$price,$description,$version,$gear,$origin,$id);
                if($result) {
                    move_uploaded_file($_FILES["image"]["tmp_name"],"./images/",$image);
                    header("location:index.php");
                }
            }
        }


        $view = "views/v_editCar.php";
        include "templates/layout.php";
    }
}
