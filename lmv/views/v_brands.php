<div class="container">
    
    
    <a href="add_brand.php">Add Brand</a>
    <table class="table">
        <tr>
            <td>Name Brand</td>
            <td>#</td>
        </tr>
        <?php foreach($brands as $value) { ?>
        <tr>
            <td><?php echo $value->name_brand ?></td>
            <td><a href="">delete</a> | <a href="">edit</a></td>
        </tr>
        <?php } ?>
    </table>
</div>