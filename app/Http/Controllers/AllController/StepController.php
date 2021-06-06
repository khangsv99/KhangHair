<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StepController extends Controller
{
	public function index() {

		$steps = DB::table('service__details')->where('name', 'John')->first();

		return view('_allView.step')->with('steps', $steps);
	}
    //
}
