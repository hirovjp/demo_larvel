<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Product::all();
        return view('admin.product.create', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd(1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $new_name = $image->getClientOriginalName();
        var_dump($new_name);
        $image->move(public_path('images'), $new_name);

        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'price' => 'required',
        ]);

        $product = Product::find($id);
        $product->product_name = $request->get('product_name');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->save();
        return redirect('admin/products')->with('success', 'Data Added successfully.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with(['success' => 'deleted']);
    }
}
