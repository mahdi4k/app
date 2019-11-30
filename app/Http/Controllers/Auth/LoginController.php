<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Alert;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * over ride redirectPath
     * @return string
     */
    public function redirectPath()
        {
            if (method_exists($this, 'redirectTo')) {

                return $this->redirectTo();
            }
            Alert::success( 'با موفقیت وارد سایت شدید')->autoclose(4000)->persistent("حله");
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
        }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/panel';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function showLoginForm()
    {
        return view('LoginRegister');
    }
}
