<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primarykey  = 'id';
    protected $guarded = [];

    // thiết lâp mối quan hệ với bảng blog_commets
    public function blog_commets()
    {
        return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    }
}
