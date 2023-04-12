<?php

namespace App\Repositories\OrderDetail;

use App\Repositories\BaseRepositories;
use App\Models\OrderDetail;

class OrderDetailRepository extends BaseRepositories implements OrderDetailRepositoryinterface
{

     public function getModel()
     {
          return OrderDetail::class;
     }
}
