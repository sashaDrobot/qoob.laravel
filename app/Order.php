<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function insertOrder($order, $request)
    {
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->text = $request->text;
        $order->date = now();
        $order->save();
    }
}
