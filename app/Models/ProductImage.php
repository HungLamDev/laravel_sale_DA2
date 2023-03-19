<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = 'product_images';
    protected $primarykey  = 'id';
    protected $guarded = [];
    // thiết lâp mối quan hệ với bảng 
    public function product()
    {
        return $this->belongsTo(ProductComment::class, 'product_id', 'id');
    }
}
