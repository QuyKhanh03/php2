@extends('layout.main')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable Users</a></li>
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
                            <table id="example3" width="100%" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Description</th>
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Time</th>
                                        <th>Acction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $key => $value) 
                                        <tr>
                                            <td></td>
                                            <td> {{ $value->des }} </td>
                                            <td> {{ $value->username }} </td>
                                            <td> {{ $value->name_product }} </td>
                                            <td> {{ date("i:H | d-m-Y",strtotime($value->time))  }} </td>
                                            
                                            <td>
                                                <div class="d-flex">
                                                    {{-- <a href="" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> --}}
                                                    <a href="{{ url('delete-comment/'.$value->id) }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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