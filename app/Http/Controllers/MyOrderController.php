<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyOrderController extends Controller
{
    public function index()
    {
        return view('account.my-orders');
    }

    public function orderDetails()
    {
        return view('account.order-details');
    }
}
