<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function login(Request $request)
    {

        $data = $request->all();
        $rule = [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ];

        $this->validate($request, $rule);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            if (Auth::user()->hasAnyRole(['SuperAdmin'])) {
                return redirect('dashboard');
            }
            return redirect()->route('perfil');
        } else {
            return redirect()->route('login');
        }
    }
}
