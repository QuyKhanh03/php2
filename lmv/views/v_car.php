
<div class="container">
    <a href="add_prd.php">Add Product</a>
<table class="table">
    <tr>
        <td>Name</td>
        <td>Image</td>
        <td>Price</td>
        <td>Description</td>
        <td>Version</td>
        <td>Gear</td>
        <td>Origin</td>
        <td>Action</td>
    </tr>
    <?php foreach($read_car as $key => $value) { ?>
    <tr>
        <td><?= $value->car_name ?></td>
        <td><img width="200px" src="./images/<?= $value->image ?>" alt=""></td>
        <td><?= $value->price ?></td>
        <td><?= $value->description ?></td>
        <td><?= $value->version ?></td>
        <td><?= $value->gear ?></td>
        <td><?= $value->name_brand ?></td>
        <td><a href="delete_prd.php?id=<?= $value->id_car ?>">Delete</a> | <a href="editCar.php?id=<?php echo $value->id_car ?>">edit</a></td>
    </tr>
        <?php } ?>
</table>
</div>
