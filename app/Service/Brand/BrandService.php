<?php

namespace App\Service\Brand;

use App\Service\BaseService;
use App\Service\Brand\BrandServiceinterface;

class BrandService extends BaseService implements BrandServiceinterface
{

     public $repository;
     public function __construct(BrandServiceinterface $BrandService)
     {
          $this->repository = $BrandService;
     }
}
