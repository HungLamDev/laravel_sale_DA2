<?php

namespace App\Repositories\Brand;

use App\Models\Brand;
use App\Repositories\BaseRepositories;

class BrandRepository extends BaseRepositories implements BrandRepositoryinterface
{

     public function getModel()
     {
          return Brand::class;
     }
}
