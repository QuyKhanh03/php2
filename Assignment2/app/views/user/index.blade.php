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
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($users as $key => $value)  
                                        <tr>
                                            <!-- <td><i class="fa fa-user"></i></td> -->
                                            <td> {{ $value->username }} </td>
                                            <!-- <td>M.COM., P.H.D.</td> -->
                                            <td> {{ $value->phone }} </td>
                                            <td> {{ $value->email }}</td>
                                            <td> {{ $value->address }} </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="edit-user/{{ $value->id_user }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="delete-user/{{ $value->id_user }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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