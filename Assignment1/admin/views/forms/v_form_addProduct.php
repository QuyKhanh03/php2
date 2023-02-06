<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Category</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <input name="name_product" type="text" class="form-control input-default " placeholder="Product Name">
                                </div>
                                <div class="form-group">
                                    <input name="price" type="text" class="form-control input-default " placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <input name="description" type="text" class="form-control input-default " placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <select name="cate_id" class="form-control default-select" id="sel1">
                                        <?php foreach($categories as $key=> $value): ?>
                                        <option value="<?php echo $value["cate_id"] ?>" ><?php echo $value["name"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Create</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>