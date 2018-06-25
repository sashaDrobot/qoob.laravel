<?php

namespace App\Http\Controllers;

use App\Mail\SentOrder;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function services()
    {
        return view('services');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'phone' => 'required|max:20',
            'email' => 'required|max:100|email',
            'text' => 'required|max:500'
        ]);

        $order = new Order();
        $order->insertOrder($order, $request);

        Mail::to($request->email)
            ->send(new SentOrder($request->name));

        $response = 'Ваше сообщение успешно отправлено!';

        return response($response);
    }
}
