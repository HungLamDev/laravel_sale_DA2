<?php

namespace App\Service\Order;

use App\Repositories\Order\OrderRepositoryinterface;
use App\Service\BaseService;

class OrderService extends BaseService implements OrderServiceinterface
{

     public $repository;
     public function __construct(OrderRepositoryinterface $OrderRepository)
     {
          $this->repository = $OrderRepository;
     }
     public function getOrderByUserID($userid)
     {
          return $this->repository->getOrderByUserID($userid);
     }
}
