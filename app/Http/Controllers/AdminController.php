<?php

namespace App\Http\Controllers;

use App\User;
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
        $orders = Order::all();
        $users = User::all();
        return view('admin.index', ['title' => $this->title, 'orders' => $orders, 'users' => $users]);
    }

    public function orders ()
    {
        $this->title = Lang::get('admin.orders');
        $orders = Order::where('processed', 0)->orderBy('created_at', 'desc')->paginate(8);
		
        return view('admin.list', ['title' => $this->title, 'orders' => $orders]);
    }

    public function processed ()
    {
        $this->title = Lang::get('admin.processed');
        $orders = Order::where('processed', '1')->orderBy('created_at', 'desc')->paginate(8);
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
