<?php

namespace App\Service\ProductComment;

use App\Repositories\ProductComment\ProductCommentRepositoryinterface;
use App\Service\BaseService;

class ProductCommentService extends BaseService implements ProductCommentServiceinterface
{

     public $repository;
     public function __construct(ProductCommentRepositoryinterface $ProductCommentRepository)
     {
          $this->repository = $ProductCommentRepository;
     }
}
