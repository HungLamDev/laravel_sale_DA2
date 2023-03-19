<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    protected $primarykey  = 'id';
    protected $guarded = [];

    // thiết lâp mối quan hệ với bảng 
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
