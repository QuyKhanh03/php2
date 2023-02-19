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
                            <form method="POST" action="{{ url('edit-category-post/'.$category->cate_id) }}">    
                                <div class="form-group">
                                    <input value="{{ $category->name }}" name="name" type="text" class="form-control input-default " placeholder="Category name">
                                </div>
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