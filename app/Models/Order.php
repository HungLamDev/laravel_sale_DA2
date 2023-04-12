<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primarykey  = 'id';
    protected $guarded = [];
    // thiết lâp mối quan hệ với bảng blog_commets
    public function orderDetails()
    {
        return $this->hasMany(orderDetail::class, 'order_id', 'id');
    }
}
