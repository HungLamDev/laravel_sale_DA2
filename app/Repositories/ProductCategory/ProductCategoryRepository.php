<?php

namespace App\Repositories\ProductCategory;

use App\Repositories\BaseRepositories;
use App\Models\ProductCategory;

class ProductCategoryRepository extends BaseRepositories implements ProductCategoryRepositoryinterface
{

     public function getModel()
     {
          return ProductCategory::class;
     }
}
