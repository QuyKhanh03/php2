@extends('layout.main')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Product</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit new product</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('edit-product-post/'.$product->id) }}">

                                <div class="form-group">
                                    <input value="{{  $product->name_product }}" name="name_product" type="text" class="form-control input-default " placeholder="Product Name">
                                    
                                </div>
                                <div class="form-group">
                                    <input value="{{  $product->price }}" name="price" type="text" class="form-control input-default " placeholder="Price">
                                    
                                </div>
                                <div class="form-group">
                                    <input value="{{  $product->description }}" name="description" type="text" class="form-control input-default " placeholder="Description">
                                    
                                </div>

                                
                                <div class="form-group">
                                    <select name="category" class="form-control default-select" id="sel1">
                                         @foreach($categories as $key=> $value)
                                        <option value="{{ $value->cate_id }}">{{ $value->name }}</option>
                                         @endforeach
                                    </select>
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