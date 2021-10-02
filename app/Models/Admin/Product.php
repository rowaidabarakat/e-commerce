<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_picture',
        'product_name',
        'price',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
