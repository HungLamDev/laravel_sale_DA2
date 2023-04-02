<?php

namespace App\Service\ProductCategory;

use App\Repositories\ProductCategory\ProductCategoryRepositoryinterface;
use App\Service\BaseService;

class ProductCategoryService extends BaseService implements ProductCategoryServiceinterface
{

     public $repository;
     public function __construct(ProductCategoryRepositoryinterface $productCategoryRepository)
     {
          $this->repository = $productCategoryRepository;
     }
}
