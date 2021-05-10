<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
	public function index() {
		$categories = DB::table('categories')->get();
		$products = DB::table('products')->where('idCate', 1)->get();
		return view('_allView.products')->with(['categories' => $categories,
												'products'=> $products]);
	}

	public function getProductsOfCategories($idCate) {
		$categories = DB::table('categories')->get();
		$products = DB::table('products')->where('idCate', $idCate)->get();
		return View('_allView.products')->with(['categories' => $categories,
												'products'=> $products]);
	}

    //
}
