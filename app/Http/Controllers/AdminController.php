<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Lang;

class AdminController extends Controller
{
    protected $title;

    public function __construct()
    {
        $this->middleware('auth');
        $this->title = Lang::get('admin.admin');
    }

    public function index ()
    {
        return view('admin.index', ['title' => $this->title ]);
    }

    public function orders ()
    {
        $this->title = Lang::get('admin.orders');
        $orders = Order::where('processed', 0)->paginate(8);
		
        return view('admin.list', ['title' => $this->title, 'orders' => $orders]);
    }

    public function processed ()
    {
        $this->title = Lang::get('admin.processed');
        $orders = Order::where('processed', '1')->paginate(8);
        return view('admin.list', ['title' => $this->title, 'orders' => $orders]);
    }

    public function process($id) {
        $order = Order::findOrFail($id);
        $order->processed = '1';
        $order->save();
        return back();
    }

    public function delete($id) {
        $order = Order::findOrFail($id);
        $order->delete();
        return back();
    }
}
