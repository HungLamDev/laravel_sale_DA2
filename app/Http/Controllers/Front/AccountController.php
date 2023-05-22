<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\Order\OrderServiceinterface;
use App\Service\ProductCategory\ProductCategoryService;
use App\Service\User\UserServiceinterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Contains;

class AccountController extends Controller
{
    private $userService;
    private $orderService;
    private $productCategoryService;
    public function __construct(UserServiceinterface $userService, OrderServiceinterface $orderService, ProductCategoryService $productCategoryService)
    {
        $this->productCategoryService  = $productCategoryService;
        $this->userService = $userService;
        $this->orderService = $orderService;
    }

    public function login()
    {
        $categories = $this->productCategoryService->all();
        return view('front.account.login', compact('categories'));
    }
    public function checkLogin(Request $request)
    {
        if (Constant::user_level_admin) {
            $level = Constant::user_level_admin;
        } else {
            $level = Constant::user_level_client;
        }
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => $level, //tài khoản khach hàng
        ];
        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            //return redirect('');
            return redirect()->intended('');
        } else {
            return back()->with('notification', 'Email hoặc mật khẩu không chính xác');
        }
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }
    public function register()
    {
        $categories = $this->productCategoryService->all();
        return view('front.account.register', compact('categories'));
    }
    public function postRegister(Request $request)
    {
        if ($request->password != $request->passwork_confirmation) {
            return  back()->with('notification', 'Mật khẩu không trùng khớp');
        }
        $data = [
            'name' => $request->name,
            'email' =>  $request->email,
            'password' =>  bcrypt($request->password),
            'level' => Constant::user_level_client,

        ];
        $this->userService->create($data);
        return redirect('account/login')->with('notification', 'Đăng ký tài khoản thành công! Vui lòng Đăng Nhập');
    }
    public function myOrderIndex()
    {
        $categories = $this->productCategoryService->all();
        $orders = $this->orderService->getOrderByUserID(Auth::id());


        return view('front.account.my-order.index', compact('orders', 'categories'));
    }
    public function myOrderShow($id)
    {
        $categories = $this->productCategoryService->all();

        $order = $this->orderService->find($id);
        return view('front.account.my-order.show', compact('order', 'categories'));
    }
}
