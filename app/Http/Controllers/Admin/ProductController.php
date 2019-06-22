<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $data = Product::all();
        $products = collect([]);
        foreach ($data as $row) {
            $stmt = [];
            $stmt['image'] = $row['image'];
            $stmt['id'] = $row['id'];
            $stmt['product_name'] = $row['product_name'];
            $stmt['price'] = $row['price'];
            $products->push($stmt);
        }
        $products = $products->sortBy('price');
        return view('admin.product.index', ['data' => $products]);
    }

    public function create(){
        $data = Product::all();
        return view('admin.product.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $new_name = $image->getClientOriginalName();
        var_dump($new_name);exit;
        $image->move(public_path('images'), $new_name);

        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'price' => 'required',
        ]);

        $product = new Product;
        $product->product_name = $request->get('product_name');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->save();
        return redirect('admin/products')->with('success', 'Data Added successfully.!');
    }
}
