<?php

namespace App\Repositories\Brand;

use App\Repositories\BaseRepositories;
use App\Models\Brand;

class BrandRepository extends BaseRepositories implements BrandRepositoryinterface
{

     public function getModel()
     {
          return Brand::class;
     }
}
