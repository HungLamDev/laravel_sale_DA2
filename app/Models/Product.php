<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primarykey  = 'id';
    protected $guarded = [];
    // thiết lâp mối quan hệ với bảng brand
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    // thiết lâp mối quan hệ với bảng 
    public function productCategory()
    {
        return $this->belongsTo(productCategory::class, 'product_category_id', 'id');
    }
    // thiết lâp mối quan hệ với bảng 
    public function productImages()
    {
        return $this->hasMany(productImage::class, 'product_id', 'id');
    }
    // thiết lâp mối quan hệ với bảng 
    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }
    // thiết lâp mối quan hệ với bảng 
    public function productcomments()
    {
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }
    // thiết lâp mối quan hệ với bảng 
    public function orderDetais()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
}
