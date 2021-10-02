<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    public function hasMany(){
        $category = Category::with([
            'product' => function($query){
                $query->select('product_picture','product_name','price','category_id');
            }
        ])->get();
        return response()->json($category);
    }

    public function hasManyReverse(){
        $product = Product::with([
            'category' => function($query){
                $query->select('category_picture','category_name');
            }
        ])->get();
        return response()->json($product);
    }
}
