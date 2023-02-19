@extends('layout.main')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Product</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create new product</h4>
                    </div>
                   
                        
                    
                    
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('add-product-post') }}">
                                {{-- @if(isset($_SESSION["errors"]) && isset($_GET["msg"])) --}}
                                @isset( $_SESSION["errors"])
                                <div class="form-group">
                                    <input name="name_product" type="text" class="form-control input-default " placeholder="Product Name">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["name_product"] }}</p>
                                </div>
                                <div class="form-group">
                                    <input name="price" type="text" class="form-control input-default " placeholder="Price">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["price"] }}</p>
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["number"] }}</p>
                                </div>
                                <div class="form-group">
                                    <input name="description" type="text" class="form-control input-default " placeholder="Description">
                                    <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["description"] }}</p>
                                </div>

                                {{-- @endif --}}
                                
                                @endisset
                                <div class="form-group">
                                    <select name="category" class="form-control default-select" id="sel1">
                                         @foreach($categories as $key=> $value)
                                        <option value="{{ $value->cate_id }}">{{ $value->name }}</option>
                                         @endforeach
                                    </select>
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