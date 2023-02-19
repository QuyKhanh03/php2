@extends('layout.main')
@section('content')
@isset($_SESSION["error"])
    <ul>
        @foreach($_SESSION["error"] as $key => $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
@endisset
<form action="{{ url('add-product-post') }}" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control"  name="name_product">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
        <input type="text" class="form-control"  name="price">
      </div>
    
    <button class="btn btn-primary" name="submit">Submit</button>
</form>
@endsection