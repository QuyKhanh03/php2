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
                            <form method="POST" action="{{ url('add-discount-post') }}">
                                {{-- @if(isset($_SESSION["errors"]) && isset($_GET["msg"])) --}}
                                {{-- @isset( $_SESSION["errors"]) --}}
                                <div class="form-group">
                                    <select name="product" class="form-control default-select" id="sel1">
                                         @foreach($product as $key=> $value)
                                        <option value="{{ $value->id }}">{{ $value->name_product }}</option>
                                         @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input name="discount_amount" type="text" class="form-control input-default " placeholder="Discount Amount">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["discount_amount"] }}</p> --}}
                                </div>
                                <div class="form-group">
                                    <input name="start_date" type="text" class="form-control input-default " placeholder="Start Date">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["start_date"] }}</p> --}}
                                </div>
                                <div class="form-group">
                                    <input name="end_date" type="text" class="form-control input-default " placeholder="End Date">
                                    {{-- <p class="fs-6 text-danger mt-2">  {{ $_SESSION["errors"]["end_date"] }}</p> --}}
                                </div>

                                {{-- @endif --}}
                                
                                {{-- @endisset --}}
                                
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