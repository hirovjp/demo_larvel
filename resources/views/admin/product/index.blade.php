@extends('layouts.admin')
@section('content')
    <h1>Danh sách sản phẩm</h1>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Products
        </div>
        <div align="right">
            <button class="btn btn-success" type="button" onclick='window.location.href="{{route('admin.product_create')}}" '>Add Product</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>ID</th>
                        <th>Product_name</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <thead>
                    @foreach($data as $row)
                        <tr>
                            <td><img src="{{asset('images').'/'.$row['image']}}" width='70'></td>
                            <td>{{ $row['id'] }}</td>
                            <td>{{ $row['product_name'] }}</td>
                            <td>{{ $row['price'] }}</td>
                            <td><a href="{{ action('Admin\ProductsController@edit', ['id' => $row['id']]) }}" class="btn btn-xs btn-info">Sửa</a></td>
                            <td>
                                <form action="{{ action('Admin\ProductsController@destroy', ['id' => $row['id']]) }}" method="POST">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
