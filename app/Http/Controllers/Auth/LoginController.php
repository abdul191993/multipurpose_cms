<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    public function showAdminLoginForm()
    {
        //$settings = DB::table('settings')->find(1);
        
        return view('admin.auth.login');
    }

     protected function redirectTo()
    {
        if (Auth::check() && Auth::user()->hasRole('superadmin'))
        {
           return '/superadmin/home';
        }
        elseif (Auth::check() && Auth::user()->hasRole('admin')) {
             return '/admin/home';
        }
        elseif (Auth::check() && Auth::user()->hasRole('user'))
        {
            return '/home';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function logout(Request $request){
        if (Auth::check() && Auth::user()->hasRole('superadmin'))
        {
            Auth::logout();
           return redirect()->route('superadmin.login');
        }
        elseif (Auth::check() && Auth::user()->hasRole('admin')) {
            Auth::logout();
             return redirect()->route('admin.login');
        }
        elseif (Auth::check() && Auth::user()->hasRole('user'))
        {
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
