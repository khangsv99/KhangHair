<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailProductsController extends Controller
{
	// public function index() {
	// 	return view('_allView.detail_product');
	// }
	public function getProduct($id) {
		$product = DB::table('products')->where('idPro', $id)->first();
		$products = DB::table('products')->where('idCate', $product->idCate)->get(); // them dk

		return view('_allView.detail_product')->with(['product'=> $product,
														'products' => $products]);
	}
}
