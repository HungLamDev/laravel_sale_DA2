<?php

namespace App\Service\OrderDetail;

use App\Repositories\OrderDetail\OrderDetailRepositoryinterface;
use App\Service\BaseService;

class OrderDetailService extends BaseService implements OrderDetailServiceinterface
{

     public $repository;
     public function __construct(OrderDetailRepositoryinterface $OrderDetailRepository)
     {
          $this->repository = $OrderDetailRepository;
     }
}
