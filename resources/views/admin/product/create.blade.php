@extends('layouts.admin')

@section('content')
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Add Product
        </div>
        <div class="card-body">
            <form action="{{action('Admin\ProductController@store')}}" method="post" enctype="multipart/form-data>
                @csrf
                <div class="form-group">
                    <label for="exampleInputMon">Name</label>
                    <input type="text" class="form-control"
                           name="name"
                           placeholder="Name product">
                </div>
                <div class="form-group">
                    <label for="exampleInputMon">Price</label>
                    <input type="text" class="form-control"
                           name="price"
                           placeholder="Price">
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Select Image : </label>
                    <div class="col-md-8">
                    <input type="file" name="image" id="image" />
                    <span id="store_image"></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection