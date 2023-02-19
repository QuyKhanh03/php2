@extends('layout.main')
@section('content')
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
            <div class="col-xl-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('add-category-post') }}">    
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control input-default " placeholder="Category name">
                                    @isset($_SESSION["errors"])
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["name"] }}</p>
                                    @endisset
                                </div>
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