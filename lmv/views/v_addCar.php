<div class="container">
    <div class="col-6">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name Car</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Version</label>
                <input name="version" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gear</label>
                <input name="gear" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Origin</label>
                <select name="origin" >
                    <?php foreach($categories as $key=> $value) { ?>
                    <option value="<?php echo $value->id ?>"><?php echo $value->name_brand ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>