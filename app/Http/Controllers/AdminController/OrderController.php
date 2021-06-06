<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrders () {
        $orders = DB::table('products')->where('idCate', $id)->paginate(3);
    }
}
