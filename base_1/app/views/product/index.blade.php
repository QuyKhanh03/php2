@extends('layout.main')
@section('content')
    <table class="table table-hover">
        <tr>
            
            <td>Name Product</td>
            <td>Price</td>
            <td>Category name</td>
        </tr>
        @foreach($products as $key => $value)
            <tr>
                
                <td>{{ $value->name_product }}</td>
                <td>{{ $value->price }}</td>
                <td>{{ $value->name }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ url('add-product') }}">Thêm sản phẩm</a>
@endsection