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
                        <h4 class="card-title">Edit  user</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('edit-user-post/'.$user->id_user) }}">
                                {{-- @isset( $_SESSION["errors"]) --}}
                                <div class="form-group">
                                    <input name="username" value="{{ $user->username}}" type="text" class="form-control input-default " placeholder="User Name">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["username"] }}</p> --}}
                                </div>
                                <div class="form-group">
                                    <input name="password" value="{{ $user->password }}" type="text" class="form-control input-default " placeholder="Password">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["password"] }}</p> --}}
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" value="{{ $user->email }}" class="form-control input-default " placeholder="Email">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["email"] }}</p> --}}
                                </div>
                                <div class="form-group">
                                    <input name="address" type="text" value="{{ $user->address }}" class="form-control input-default " placeholder="Address">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["address"] }}</p> --}}
                                </div>
                                <div class="form-group">
                                    <input name="phone" type="text" value="{{ $user->phone }}" class="form-control input-default " placeholder="Phone">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["phone"] }}</p> --}}
                                </div>
                                @if(isset($_SESSION["success"])&& isset($_GET["msg"]))
                                    <p>{{ $_SESSION["success"] }}</p>
                                @endif

                                {{-- @endisset --}}
                                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection