<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable Discounts</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Discounts</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name Product</th>
                                        <th>Discount amount</th>
                                        <th>Start date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listDiscounts as $key => $value) { ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $value["name_product"] ?></td>
                                            <!-- <td>M.COM., P.H.D.</td> -->
                                            
                                            <td><a href="javascript:void(0);"><strong><?php echo $value["discount_amount"] ?>%</strong></a></td>
                                            <td><?php echo date_format(date_create($value["start_date"]),"H:i || d/m/Y") ?></td>
                                            <td><?php echo date_format(date_create($value["end_date"]),"H:i || d/m/Y") ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="?url=delete-discount&discount_id=<?php echo $value["id"] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>