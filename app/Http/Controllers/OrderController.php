<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.orders.index');
    }

    public function show(Order $order)
    {
        $order->load([
            'payments',
            'trackings',
            'items'
        ]);
        return view('admin.orders.show', compact('order'));
    }
}
