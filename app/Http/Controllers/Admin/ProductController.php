<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(6);
        return view('admin.products.all' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validat date befor insert to database
        $validator = Validator::make($request->all() , [
            'product_picture' => ['required'],
            'product_name' => ['required' , 'string'],
            'price' => ['required'],
            'category_id' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // save images in folder
        $file_extension = $request->product_picture->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'images/product';
        $request -> product_picture -> move($path , $file_name);

        // insert
        Product::create([
            'product_picture' => $request->product_picture,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);
        return redirect()->back()->with(['success' => 'Product has been added']);
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
        $product = Product::findOrFail($id);
        return view('admin.products.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('admin.products.edit' , compact('product'));
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
        //validat date befor insert to database
        $validator = Validator::make($request->all() , [
            'product_picture' => ['required'],
            'product_name' => ['required' , 'string'],
            'price' => ['required'],
            'category_id' => ['required'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $product = Product::findOrFail($id);
        $product->update([
            'product_picture' => $request->product_picture,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);
        return redirect()->back()->with(['success' => 'Product has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with(['success' => 'User has been deleted']);
    }
}
