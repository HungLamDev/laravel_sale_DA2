<?php

namespace App\Repositories\Order;

use App\Repositories\BaseRepositories;
use App\Models\Order;

class OrderRepository extends BaseRepositories implements OrderRepositoryinterface
{

     public function getModel()
     {
          return Order::class;
     }
     public function getOrderByUserID($userid)
     {
          return $this->model->where('user_id', $userid)->get();
     }
}
