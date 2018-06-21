<?php

namespace App\Http\Controllers;

use App\Mail\SentOrder;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    protected $title;

    public function index()
    {
        $this->title = 'Qoob - web production studio | web-дизайн | web-сайт | разработка | SEO | Харьков';
        return view('index', [ 'title' => $this->title ]);
    }

    public function about()
    {
        $this->title = 'О нас';
        return view('about', [ 'title' => $this->title ]);
    }

    public function portfolio()
    {
        $this->title = 'Портфолио';
        return view('portfolio', [ 'title' => $this->title ]);
    }

    public function services()
    {
        $this->title = 'Услуги';
        return view('services', [ 'title' => $this->title ]);
    }

    public function contacts()
    {
        $this->title = 'Контакты';
        return view('contacts', [ 'title' => $this->title ]);
    }

    public function feedback()
    {
        $this->title = 'Обратная связь';
        return view('feedback', [ 'title' => $this->title ]);
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
