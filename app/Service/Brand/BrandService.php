<?php

namespace App\Service\Brand;

use App\Repositories\Brand\BrandRepositoryinterface;
use App\Service\BaseService;

class BrandService extends BaseService implements BrandServiceinterface
{

     public $repository;
     public function __construct(BrandRepositoryinterface $BrandRepository)
     {
          $this->repository = $BrandRepository;
     }
}
