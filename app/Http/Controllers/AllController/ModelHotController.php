<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelHotController extends Controller
{
	public function index() {
		$models_hot = DB::table('modesl_hair__hots')->get();
		return view('_allView.model_hot')->with('models_hot', $models_hot);
	}
    //
}
