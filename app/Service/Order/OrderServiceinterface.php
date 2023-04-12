<?php

namespace App\Service\Order;

use App\Service\ServiceInterface;

interface OrderServiceinterface extends ServiceInterface
{
     public function getOrderByUserID($userid);
}
