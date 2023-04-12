<?php

namespace App\Utilities;


class Constant
{
     // Order 
     // Nhận đơn đặt hàng = 1;
     // Chưa xác nhận = 2;
     // Đã xác nhận = 3;
     // Đã trả = 4;
     // Xử lý = 5;
     // Vận chuyển = 6;
     // Kết thúc = 7Hủy bỏ = 0;
     const order_status_ReceiveOrders = 1;
     const order_status_Unconfirmed = 2;
     const order_status_Confirmed = 3;
     const order_status_Paid = 4;
     const order_status_Processing = 5;
     const order_status_Shippinng = 6;
     const order_status_Finish = 7;
     const order_status_Cancel = 0;



     public static $order_status = [
          self::order_status_ReceiveOrders => 'Nhận đơn đặt hàng',
          self::order_status_Unconfirmed => 'Chưa xác nhận',
          self::order_status_Unconfirmed => 'Đã xác nhận',
          self::order_status_Paid => 'Đã trả',
          self::order_status_Processing => 'Xử lý',
          self::order_status_Shippinng => 'Vận chuyển',
          self::order_status_Finish => 'Kết thúc',
          self::order_status_Cancel => 'Hủy bỏ',


     ];

     //User
     const user_level_host = 0;
     const user_level_admin = 1;
     const user_level_client = 2;

     public static $user_level = [
          self::user_level_host => 'host',
          self::user_level_admin => 'admin',
          self::user_level_client => 'client',
     ];
}
