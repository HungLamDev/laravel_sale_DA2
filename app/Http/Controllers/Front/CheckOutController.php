<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\Order\OrderServiceinterface;
use App\Service\OrderDetail\OrderDetailServiceinterface;
use App\Utilities\Constant;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Const_;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    public function __construct(OrderServiceinterface $orderService, OrderDetailServiceinterface $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }


    public function index()
    {
        $carts = Cart::Content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }
    public function addOrder(Request $request)
    {
        ///1: thêm đơn hàng 
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($request->all());
        /// 2: thêm chi tiết đơn hàng
        $carts = Cart::content();
        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->id,
                'amount' => $cart->price,
                'total' => $cart->qty * $cart->price,

            ];
            $this->orderDetailService->create($data);
        }
        //xóa giỏ hàng
        Cart::destroy();

        //trả về kết quả và thông báo
        return redirect('checkout/result')->with('notification', 'Bạn đã đặt hàng thành công! vui lòng thanh toán khi nhận hàng và có thể kiểm tra thông tin đơn hàng qua Email');
    }
    public function result()
    {
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }
    // vnpayn cập nhậy trạng thái 
    // $this->orderService->update([
    //     'status' => Constant::order_status_paid;
    // ])
}
