<?php

namespace App\Repositories\ProductComment;

use App\Repositories\BaseRepositories;
use App\Models\ProductComment;

class ProductCommentRepository extends BaseRepositories implements ProductCommentRepositoryinterface
{

     public function getModel()
     {
          return ProductComment::class;
     }
}
