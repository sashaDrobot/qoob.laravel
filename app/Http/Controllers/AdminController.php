<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    protected $title;

    public function __construct()
    {
        $this->title = 'Администратор';
        $this->middleware('auth');
    }

    public function index ()
    {
        return view('admin.index', ['title' => $this->title ]);
    }

    public function orders ()
    {
        $this->title = 'Заказы';
        $orders = Order::where('processed', 0)->paginate(8);
        return view('admin.list', ['title' => $this->title, 'orders' => $orders]);
    }

    public function processed ()
    {
        $this->title = 'Обработанные заказы';
        $orders = Order::where('processed', '1')->paginate(8);
        return view('admin.list', ['title' => $this->title, 'orders' => $orders]);
    }

    public function process($id) {
        $order = Order::find($id);
        $order->processed = '1';
        $order->save();
        return back();
    }

    public function delete($id) {
        $order = Order::find($id);
        $order->delete();
        return back();
    }
}
