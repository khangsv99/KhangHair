<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function index() {
		$idService = 1; // steps of 10 steps
		$steps = DB::table('service__details')->where('idService', $idService)->get();
		$products = DB::table('products')->take(8)->get();
		$models_hot = DB::table('modesl_hair__hots')->get();
		return view('_allView.home')->with(['steps'=> $steps,
											'products' => $products,
											'models_hot' => $models_hot]);
	}
    //
}
