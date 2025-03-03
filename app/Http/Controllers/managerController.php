<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managerController extends Controller
{
    //dashboar page
    public function index(){
        return view('manager.index');
    }

    //detail orders page
    public function detail_orders(){
        return view('manager.order.detail');
    }

}
