<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Create User</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new user</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="">
                                
                                <div class="form-group">
                                    <input value="<?php echo $results["username"] ?>" name="username" type="text" class="form-control input-default " placeholder="no data">
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo $results["password"] ?>" name="password" type="text" class="form-control input-default " placeholder="no data">
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo $results["email"] ?>" name="email" type="text" class="form-control input-default " placeholder="no data">
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo $results["address"] ?>" name="address" type="text" class="form-control input-default " placeholder="no data">
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo $results["phone"] ?>" name="phone" type="text" class="form-control input-default " placeholder="no data">
                                </div>
                                <input type="hidden" name="id_role" value="2">

                                <button type="submit" name="submit" class="btn btn-primary">Create</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>