<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StepController extends Controller
{
	public function index() {

		$10step = DB::table('service__details')->where('name', 'John')->first();

		return view('_allView.step');
	}
    //
}
