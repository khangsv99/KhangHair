<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;

class CartController extends Controller
{

	public function index (Request $request) {
		
		$user = $request->session()->get('user');
		$carts = Cart::with('products', 'users')->where('idUser', $user->id)->get();
		$request->session()->put('countCart',count( $carts));
		return view('_allView.cart')->with('carts', $carts);
	}

	public function show(Request $request, $idPro) {

		$flag = 0; // hasn't product be available
		$user = $request->session()->get('user');
		$carts_test = Cart::with('products', 'users')->where('idUser', $user->id)->get();

		foreach ($carts_test as $ct) {
			if ((int)$idPro == $ct->idPro) {
				$flag = 1; // has product available
			}
		}

		if ($flag == 0) {
			Cart::create([
		        'idPro' => $idPro,
			    'idUser' => $user->id,
			    'amount' => 1
			]);
		}

		$carts = Cart::with('products', 'users')->where('idUser', $user->id)->get();
		$request->session()->put('countCart',count( $carts));

		return redirect('cart')->with('carts', $carts);
	}

	public function deleteCart(Request $request)
	{
		Cart::where('idUser', $request->userId)->where('idPro', $request->proId)->delete();
		return response()->json([
			'message' => 'Data deleted successfully!'
		]);
		
	}

	public function plusOrMinusCart(Request $request)
	{
		Cart::where('idUser', $request->userId)->where('idPro', $request->proId)->update(['amount' => $request->amount]);
		return  $request;
	}
}
