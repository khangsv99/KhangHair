<?php

namespace App\Http\Controllers\AllController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Books;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Order_Details;
use App\Models\Cart;
use App\Models\Payments;

class PaymentController extends Controller
{
	public function index(Request $request) {

		$user = $request->session()->get('user');
		$carts = Cart::with('products', 'users')->where('idUser', $user->id)->get();
		Order::create([
			'payMents' => '',
			'note' => $request->note . ' ',
            'totalMoney' => $request->total,
            'status' => 'Prosecc',
			'idUser' => $user->id
		]);

		$idOrder_1 = DB::table('orders')->where('idUser', $user->id)->first();

		foreach ($carts as $cart) {

			Order_Details::create([
				'idOrder' => $idOrder_1->idOrder,
				'idPro' => $cart->idPro,
				'amount' => $cart->amount
			]);
		}

		$total = $request->total;

		return view('_allView.payment')->with('total', $total);
	}

	public function createPaymentVNPay(Request $request)
	{
		$vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
		$vnp_OrderInfo = $_POST['order_desc'];
		$vnp_OrderType = $_POST['order_type'];
		$vnp_Amount = str_replace(',', '', $_POST['amount']) * 100;
		$vnp_Locale = $_POST['language'];
		$vnp_BankCode = $_POST['bank_code'];
		$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

		$inputData = array(
			"vnp_Version" => "2.0.0",
			"vnp_TmnCode" => env('VNP_TMNCODE'),
			"vnp_Amount" => $vnp_Amount,
			"vnp_Command" => "pay",
			"vnp_CreateDate" => date('YmdHis'),
			"vnp_CurrCode" => "VND",
			"vnp_IpAddr" => $vnp_IpAddr,
			"vnp_Locale" => $vnp_Locale,
			"vnp_OrderInfo" => $vnp_OrderInfo,
			"vnp_OrderType" => $vnp_OrderType,
			"vnp_ReturnUrl" => route('vnpay.return'),
			"vnp_TxnRef" => $vnp_TxnRef,
		);

		if (isset($vnp_BankCode) && $vnp_BankCode != "") {
			$inputData['vnp_BankCode'] = $vnp_BankCode;
		}
		ksort($inputData);
		$query = "";
		$i = 0;
		$hashdata = "";
		foreach ($inputData as $key => $value) {
			if ($i == 1) {
				$hashdata .= '&' . $key . "=" . $value;
			} else {
				$hashdata .= $key . "=" . $value;
				$i = 1;
			}
			$query .= urlencode($key) . "=" . urlencode($value) . '&';
		}

		$vnp_Url = env('VNP_URL') . "?" . $query;
		$vnp_HashSecret = env('VNP_HASHSECRET');
		if (isset($vnp_HashSecret)) {
			$vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
			$vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
		}
		$returnData = array('code' => '00'
			, 'message' => 'success'
			, 'data' => $vnp_Url);
		return redirect($vnp_Url);
	}

	public function vnpayReturn(Request $request)
	{
		if($request->vnp_ResponseCode == "00")
		{
			$user = $request->session()->get('user');
			$order = DB::table('orders')->where('idUser', $user->id)->first();
			Payments::create([
				'idOrder' => $order->idOrder, 
				'vnp_Amount' => $request->vnp_Amount, 
				'vnp_BankCode' => $request->vnp_BankCode, 
				'vnp_BankTranNo' => $request->vnp_BankTranNo, 
				'vnp_CardType' => $request->vnp_CardType, 
				'vnp_OrderInfo' => $request->vnp_OrderInfo, 
				'vnp_PayDate' => $request->vnp_PayDate, 
				'vnp_ResponseCode'  => $request->vnp_ResponseCode, 
				'vnp_TmnCode'  => $request->vnp_TmnCode, 
				'vnp_TransactionNo'  => $request->vnp_TransactionNo,
				'vnp_TxnRef'  => $request->vnp_TxnRef, 
				'vnp_SecureHashType'  => $request->vnp_SecureHashType, 
				'vnp_SecureHash'  => $request->vnp_SecureHash
			]);
			session(['countCart' => 0]);

			Cart::where('idUser', $user->id)->delete();

			return view('_allView.result_payment')->with('retult',"Giao dịch thành công");
		} 
		return view('_allView.result_payment')->with('retult',"Giao dịch thất bại");
	}

	// public function resultPayment()
	// {
	// 	return view('_allView.result_payment')->with('responseCode', $request->vnp_ResponseCode);
	// }
}
