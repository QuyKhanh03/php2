<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable Users</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listUsers as $key => $value) { ?>
                                        <tr>
                                            <td><i class="fa fa-user"></i></td>
                                            <td><?php echo $value["username"] ?></td>
                                            <!-- <td>M.COM., P.H.D.</td> -->
                                            <td><a href="javascript:void(0);"><strong><?php echo $value["phone"] ?></strong></a></td>
                                            <td><a href="javascript:void(0);"><strong><?php echo $value["email"] ?></strong></a></td>
                                            <td><?php echo $value["address"] ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="?url=edit-user&id_user=<?php echo $value["id_user"] ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="?url=delete-user&id_user=<?php echo $value["id_user"] ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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