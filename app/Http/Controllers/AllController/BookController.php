<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;

class BookController extends Controller
{
	public function index() {

		$emps = DB::table('user')->where('human_rights', 1)->get();

		$listReserved = Books::with('users_book', 'emp_book')->get();

		return view('_allView.book')->with(['emps'=> $emps,
											'listReserved' => $listReserved]);
	}
    //
}
