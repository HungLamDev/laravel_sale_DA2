<?php

namespace App\Repositories\Product;

use App\Repositories\BaseRepositories;
use App\Models\Product;

class ProductRepository extends BaseRepositories implements ProductRepositoriesinterface
{

     public function getModel()
     {
          return Product::class;
     }
}
