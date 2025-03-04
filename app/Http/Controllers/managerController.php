<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class managerController extends Controller
{
    //dashboar page
    public function index(){
        return view('manager.index');
    }

    //detail orders page
    public function detail_orders(){
        $orders = Order::get();
        
        return view('manager.order.detail', compact('orders'));
    }

    // add order page
    public function add_order(){
        $users = User::where('usertype', 'operator')->select('id', 'name')->get();

        return view('manager.order.add', compact('users'));
    }

    // save order function
    public function save_order(Request $request){
        $data = new Order;

        $data->product_name = $request->product_name;
        $data->quantity = $request->quantity;
        $data->due_date = $request->due_date;
        $data->status = $request->status;
        $data->operator_id = $request->operator_id;

        $data->save();
        // notif succes dari toastr
        toastr()->timeOut(10000)->closeButton()->success('Work order added successfully.');
        
        return redirect()->back();
    }

}
