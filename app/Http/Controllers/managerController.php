<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class managerController extends Controller
{
    //dashboar page
    public function index(){
        $manager = Auth::user();
        $orders = Order::get();

        // ngitung jumlah order
        $order = Order::all()->count();

        // ngitung jumlah operator
        $operator = User::where('usertype', 'operator')->count();

        return view('manager.index', compact('manager', 'orders', 'order', 'operator'));
    }

    //detail orders page
    public function detail_orders(){
        $manager = Auth::user();
        $orders = Order::get();
        
        return view('manager.order.detail', compact('orders', 'manager'));
    }

    // add order page
    public function add_order(){
        $manager = Auth::user();
        $users = User::where('usertype', 'operator')->select('id', 'name')->get();

        return view('manager.order.add', compact('users', 'manager'));
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

    // edit order page
    public function edit_order($id){
        $manager = Auth::user();
        $order = Order::find($id);
        $users = User::where('usertype', 'operator')->select('id', 'name')->get();

        return view('manager.order.edit', compact('order', 'users','manager'));
    }

    // update order function
    public function update_order(Request $request, $id){
        $data = Order::find($id);

        $data->product_name = $request->product_name;
        $data->quantity = $request->quantity;
        $data->due_date = $request->due_date;
        $data->status = $request->status;
        $data->operator_id = $request->operator_id;

        $data->save();
        // notif succes dari toastr
        toastr()->timeOut(10000)->closeButton()->success('Work order updated successfully.');
        
        return redirect()->back();
    }

    // delete order
    public function delete_order($id){
        $order = Order::find($id);
        $order->delete();

        // notif succes dari toastr
        toastr()->timeOut(10000)->closeButton()->success('Work order deleted successfully.');
        
        return redirect()->back();
    }
    
    //chart
    public function chartData()
    {
        $orders = Order::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->get();

        return response()->json($orders);
    }
}
