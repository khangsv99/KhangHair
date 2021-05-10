<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;

class CartController extends Controller
{
	public function index() {
		$carts = Cart::with('products', 'users')->get();
		//dd($carts);
		return view('_allView.cart')->with('carts', $carts);
	}


    //
}
