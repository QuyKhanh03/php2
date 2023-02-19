@extends('layout.main')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable Product</a></li>
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
                            <table id="example3" width="100%" class="table display min-w850">
                                <thead>
                                    <tr> 
                                        <th>Name</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($categories as $key => $value) 
                                        <tr>
                                            <!-- <td><i class="fa fa-user"></i></td> -->
                                            <td> {{ $value->name }}</td>
                                            
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ url('edit-category/'.$value->cate_id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ url('delete-category/'.$value->cate_id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection