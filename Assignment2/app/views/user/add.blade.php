@extends('layout.main')
@section('content')
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
            <div class="col-xl-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new user</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('add-user-post') }}">
                                @isset( $_SESSION["errors"])
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control input-default " placeholder="User Name">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["username"] }}</p>
                                </div>
                                <div class="form-group">
                                    <input name="password" type="text" class="form-control input-default " placeholder="Password">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["password"] }}</p>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control input-default " placeholder="Email">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["email"] }}</p>
                                </div>
                                <div class="form-group">
                                    <input name="address" type="text" class="form-control input-default " placeholder="Address">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["address"] }}</p>
                                </div>
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control input-default " placeholder="Phone">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["phone"] }}</p>
                                </div>
                                <input type="hidden" value="2" name="id_role">
                                @endisset
                                @if(isset($_SESSION["success"]) && isset($_GET["msg"]))
                                <p>{{ $_SESSION["success"] }}</p>
                                @endif
                                <button type="submit" name="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection