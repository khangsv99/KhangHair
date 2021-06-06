<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
	public function index() {
		return view('_allView.contact');
	}


	public function contactSubmit(Request $request)
	{
		$data = [
			'fullName' => $request->fullName,
			'mail' => $request->mail,
			'phone' => $request->phone,
			'description' =>  $request->description
		];

		Mail::send('_allView.template_contact',
		[
			'fullName' => $request->fullName,
			'mail' => $request->mail,
			'phone' => $request->phone,
			'description' => $request->description
		], function ($message) use($request){
			// Reset Password
			// $message->from('leelamhair@gmail.com', 'Admin');
			// $message->to($request->mail,  $request->fullName);

			$message->from($request->mail,  $request->fullName);
			$message->to('leelamhair@gmail.com', 'Admin');
			
			$message->subject('Khách Hàng Liên Hệ');
		});

		if (Mail::failures()) {
			// return response showing failed emails
			return redirect()->back()->withErrors('errors', 0)->withInput();
		}
		return redirect('/contact')->with('success', 'you have send mail successfully');
	}
}
