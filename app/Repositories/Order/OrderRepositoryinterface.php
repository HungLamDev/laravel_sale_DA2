<?php

namespace App\Repositories\Order;

use App\Repositories\Repositoriesinterface;

interface OrderRepositoryinterface extends Repositoriesinterface
{
     public function getOrderByUserID($userid);
}
