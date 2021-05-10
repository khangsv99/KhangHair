<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
	public function index() {
		$services_uon = DB::table('service__details')->where('idService', 4)->get();
		$services_nhuom = DB::table('service__details')->where('idService', 5)->get();
		return view('_allView.service')->with(['services_uon'=> $services_uon,
												'services_nhuom' => $services_nhuom]);
	}

	public function showStepOfService($id) {
		$steps = DB::table('service__details')->where('idService', $id)->get();
		return view('_allView.step')->with('steps', $steps);
	}
    //
}
