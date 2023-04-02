<?php

namespace App\Repositories\Blog;

use App\Repositories\BaseRepositories;
use App\Models\Blog;

class BlogRepository extends BaseRepositories implements BlogRepositoryinterface
{

     public function getModel()
     {
          return Blog::class;
     }
     public function getLatestBlog($limit = 3)
     {
          return $this->model->orderBy('id', 'desc')
               ->limit($limit)
               ->get();
     }
}
