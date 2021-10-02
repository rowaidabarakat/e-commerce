<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::paginate(6);
        return view('admin.categories.all' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
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
            'category_picture' => ['required'],
            'category_name' => ['required' , 'string'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        // save images in folder
        $file_extension = $request->category_picture->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'images/category/';
        $request -> category_picture -> move($path , $file_name);

        //insert
        Category::create([
            'category_picture' => $request->category_picture,
            'category_name' => $request->category_name,
        ]);
        return redirect()->back()->with(['success' => 'Category has been added']);
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
        $category = Category::findOrFail($id);
        return view('admin.categories.show' , compact('category'));
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
        $category = Category::findOrFail($id);
        return view('admin.categories.edit' , compact('category'));
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
            'category_picture' => ['required'],
            'category_name' => ['required' , 'string'],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $category = Category::findOrFail($id);
        $category->update([
            'category_picture' => $request->category_picture,
            'category_name' => $request->category_name,
        ]);
        return redirect()->back()->with(['success' => 'Category has been updated']);
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
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with(['success' => 'User has been deleted']);
    }
}
