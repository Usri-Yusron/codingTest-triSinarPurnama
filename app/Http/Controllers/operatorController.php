<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class operatorController extends Controller
{
    //dashboar page
    public function index()
    {
        $operator = Auth::user();

        $orders = Order::where('operator_id', $operator->id)->get();



        return view('dashboard', compact('orders'));
    }
}
