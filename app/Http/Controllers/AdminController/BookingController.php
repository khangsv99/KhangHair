<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index () {
        $services = DB::table('services')->get();
		$categories = DB::table('categories')->get();
        return view("_adminView.booking.booking")->with(['services' => $services,
        'categories' => $categories]);;
    }
}