<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $primarykey  = 'id';
    protected $guarded = [];

    // thiết lâp mối quan hệ với bảng order
    public function oder()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    // thiết lâp mối quan hệ với bảng product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
