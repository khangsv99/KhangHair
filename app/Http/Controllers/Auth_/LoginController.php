<?php

namespace App\Http\Controllers\Auth_;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\User;
use App\Models\Cart;

class LoginController extends Controller
{
	use RedirectsUsers, ThrottlesLogins;
	public function getLoginForm()
    {
        return view('_auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);//

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            $request->session()->regenerate();


            $this->clearLoginAttempts($request);

            //lấy user từ database lên để lấy thông tin
            $results = DB::table('user')
                ->where('email', $request->email)
                ->first();

            $stringToken = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(15/strlen($x)) )),1,15) . (string)time();
            //update token vao database
            DB::table('user')
            ->where('email', $request->email)
            ->update(['token' => $stringToken]);


            $array = [
                "result" => true,
                "data" => $results,
                "token" => $stringToken 
                //"message" => "Order thành công!",
            ];
            $carts = Cart::with('products', 'users')->where('idUser', $results->id)->get();
            $request->session()->put('countCart',count( $carts));
            $jsonData = json_encode($array);
            $request->session()->flash('status', 'Login thành công!');
            $request->session()->put('user', $results);

            if ((int)$results->human_rights == 0) // admin
            {
                return redirect('/admin/index')->with('keyName', $jsonData);
            }
            if ((int)$results->human_rights == 1) // eml
            {
                return redirect('/admin/index')->with('keyName', $jsonData); // does not exist page
            }

            return redirect('/')->with('keyName', $jsonData);
            
            //return View('_adminView.add_service')->with('keyName', $jsonData);
            //return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        $email = DB::table('user')->select('email')->where('email', $request->email)->get();

        if (count($email) === 0) {
            $message = "Account not exit! :)) Please create a account!";
        } 
        else {
            $message = "Password was wrong! :)) Again!";
        }

        $array_l = [
                    "result" => false,
                    "data" => null,
                    "message" => $message
                    //"message" => "Order thành công!",
                ];

        $jsonData_l = json_encode($array_l);
        return redirect('/')->with('keyName', $jsonData_l);
        //return $this->sendFailedLoginResponse($request);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

     protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        $text = 'sasas';
        return view('_allView.home')->with('arr', response()->json($text));

        // return $this->authenticated($request, $this->guard()->user())
        //         ?: redirect()->intended($this->redirectPath());
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        //
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function log() {
        return redirect('/');
    }

    public function loggedOut(Request $request)
    {
        $p = $request->session()->get('email');

        DB::table('user')
            ->where('email', $p)
            ->update(['token' => '']);

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');

    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    //
}
