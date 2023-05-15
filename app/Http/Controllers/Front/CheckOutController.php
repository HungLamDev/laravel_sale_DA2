<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\Order\OrderServiceinterface;
use App\Service\OrderDetail\OrderDetailServiceinterface;
use App\Service\ProductCategory\ProductCategoryService;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Const_;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    private $productCategoryService;
    public function __construct(OrderServiceinterface $orderService, OrderDetailServiceinterface $orderDetailService, ProductCategoryService $productCategoryService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->productCategoryService  = $productCategoryService;
    }


    public function index()
    {
        $categories = $this->productCategoryService->all();
        $carts = Cart::Content();
        $total = Cart::total(0, '.', '');
        $subtotal = Cart::subtotal(0, '.', '');
        return view('front.checkout.index', compact('carts', 'total', 'subtotal', 'categories'));
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
        if ($request->payment_type == 'pay_later') {
            //gửi email

            $total = Cart::total(0, '.', '');
            $subtotal = Cart::subtotal(0, '.', '');
            $this->sendEmail($order, $total, $subtotal);
            //xóa giỏ hàng
            Cart::destroy();
            //trả về kết quả và thông báo
            return redirect('checkout/result')->with('notification', 'Bạn đã đặt hàng thành công! vui lòng thanh toán khi nhận hàng và có thể kiểm tra thông tin đơn hàng qua Email');
        }
        if ($request->payment_type == 'online_payment') {
            //01 lay đường đẫn thanh toán 
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //ma id don hang
                'vnp_OrderInfo' => 'Mô tả đơn hàng ở đây',
                'vnp_Amount' => Cart::total(0, ',', '.'),

            ]);


            //chuyuển  hướng tới địa chỉ trên 
            return redirect()->to($data_url);
        }
    }
    public function vnPayCheck(Request $request)
    {
        //lấy data từ url do vnpay gửi qua $vnp_returnurl
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //mã phản hồi thanh toán
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //mã số order_id
        $vnp_Amount = $request->get('vnp_Amount'); //số tiền thanh toán

        //kiểm tra data, xem kết quả giao dịch trả về từ vn pay hợp lệ hay không  
        if ($vnp_ResponseCode != null) {
            //nếu thành công
            if ($vnp_ResponseCode == 00) {
                //gửi email
                $order = $this->orderService->find($vnp_TxnRef);
                $total = Cart::total(0, '.', '');
                $subtotal = Cart::subtotal(0, '.', '');
                $this->sendEmail($order, $total, $subtotal);
                Cart::destroy();
                //xóa giỏ hàng
                return redirect('checkout/result')->with('notification', 'Thanh toán thành công! vui lòng kiểm tra thông tin Email.');
            } else {
                //xóa đơn hàng đã thêm vào 
                $this->orderService->delete($vnp_TxnRef);
                // thông báo lỗi 

                return redirect('checkout/result')->with('notification', 'Thanh toán thất bại vui lòng kiểm tra lại');
            }
        }
    }
    public function result()
    {
        $notification = session('notification');
        $categories = $this->productCategoryService->all();
        return view('front.checkout.result', compact('notification', 'categories'));
    }
    private function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;
        Mail::send('front.checkout.email', compact('order', 'total', 'subtotal'), function ($message) use ($email_to) {
            $message->from('hunglam.dev@gmail.com', 'K&H.com');
            $message->to($email_to, $email_to);
            $message->subject('Thông Tin Đơn Hàng');
        });
    }
    // vnpayn cập nhậy trạng thái 
    // $this->orderService->update([
    //     'status' => Constant::order_status_paid;
    // ])
}
