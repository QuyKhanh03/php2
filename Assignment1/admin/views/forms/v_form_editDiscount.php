<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Discount</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new Discount</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <select name="choose" class="form-control default-select" id="sel1">
                                        <?php foreach($rows as $key=>$value): ?>
                                        <option value="<?php echo $value["id"] ?>"><?php echo $value["name_product"] ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input name="discount_amount" type="text" class="form-control input-default " placeholder="Discount Amount">
                                </div>
                                <div class="form-group">
                                    <input name="start_date" type="datetime" class="form-control input-default " placeholder="Start date">
                                </div>
                                <div class="form-group">
                                    <input name="end_date" type="datetime" class="form-control input-default " placeholder="End Date">
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