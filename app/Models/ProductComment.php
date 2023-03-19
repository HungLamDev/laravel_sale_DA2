<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;

    protected $table = 'product_comments';
    protected $primarykey  = 'id';
    protected $guarded = [];
    // thiết lâp mối quan hệ với bảng 
    public function product()
    {
        return $this->belongsTo(ProductComment::class, 'product_id', 'id');
    }
    // thiết lâp mối quan hệ với bảng 
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
